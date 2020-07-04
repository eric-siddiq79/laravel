<?php
    
    namespace App\Http\Controllers;
    use App\Product;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Http\Request;
    Use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Storage;
    
    class ProductController{
        public function productform(){
            $categories = DB::select('Select * from categories');
            $sections = DB::table('sections')->select('id', 'name')->get();
            return view('product', ['categories' => $categories, 'sections' => $sections] );
        }
        
        public function cart(){
            return view('cart');
        }
        
        public function addToCart( $id ){
            $product = Product::find( $id );
            
            if( !$product ){
                abort(404);
            }
            
            $cart = session()->get('cart');
            
            if( !$cart ){
                $cart = [
                    $id => [
                        'name' => $product->title,
                        'quantity' => 1,
                        'price'   => $product->buy_price,
                        'photo'  => $product->feature_image
                    ]
                ];
                
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully');
            }
            
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                'name' => $product->title,
                'quantity' => 1,
                'price'   => $product->buy_price,
                'photo'  => $product->feature_image
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        
        public function update(Request $request){
            if($request->id and $request->quantity){
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'Cart updated successfully');
            }
        }
    
        public function remove(Request $request){
            if($request->id) {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product removed successfully');
            }
        }
        
        
        public function saveproduct( Request $request){
            $catid = $request -> category_id;
            $title = $request-> title;
            $buyprice = $request-> buy_price;
            $regular_price = $request-> regular_price;
            $flate_price = $request-> flate_price;
            $tag = $request-> tag;
            $shortdes = $request-> shortdes;
            $product_info = $request-> product_info;
            DB::insert('insert into products ( title, regular_price, flate_price, shortdes, product_info, cat_id, buy_price, tag) values(?, ?, ?, ?, ?, ?, ?, ?)', [$title, $regular_price, $flate_price, $shortdes, $product_info, $catid, $buyprice, $tag]);
            
            $imageCount = count( $request->images);
            $product_last_id = DB::getPdo()->lastInsertId();
            for( $i = 0; $i < $imageCount;  $i++ ){
                $images = $request->images;
                $image = $images[$i];
                $name = time(). $i. '.' . $image->getClientOriginalExtension();
                $destination = public_path('product-image');
                $image->move( $destination, $name);
                $image_url = 'product-image/' .$name;
                DB::insert('insert into product_image(product_id,image_url)value(?,?)',[$product_last_id,$image_url]);
            }
            
            DB::table('products')
                -> where( 'id', $product_last_id )
                -> update(['feature_image' => $image_url]);
            
            Session::flash('message', 'Added Successfully');
            return redirect() -> action('ProductController@allproducts');
            
        }
        
        public function allproducts() {
            $products = DB::select('select * from products');
            return view('products', ['products' => $products ]);
        }
        
        public function editproduct( $id ){
            $product = DB::select('select * from products where id=?', [$id]);
            $categories = DB::select('Select * from categories');
            return view('updateproduct', [ 'product' => $product, 'categories' => $categories ]);
        }
        
        public function updateproductdata( Request $request){
            $catid = $request -> category_id;
            $title = $request-> title;
            $buyprice = $request-> buy_price;
            $regular_price = $request-> regular_price;
            $flate_price = $request-> flate_price;
            $tag = $request-> tag;
            $shortdes = $request-> shortdes;
            $product_info = $request-> product_info;
            $product_id = $request->product_id;
            $section = $request->section;
            
            DB::table('products')
                -> where( 'id', $product_id )
                -> update(['title' => $title, 'regular_price' => $regular_price, 'flate_price' => $flate_price, 'shortdes' =>  $shortdes, 'product_info' => $product_info, 'cat_id' => $catid, 'buy_price' => $buyprice, 'tag' => $tag, 'home_section' => $section]);
            Session::flash('message', 'Succesfully Product updated');
            return redirect() -> action('ProductController@allproducts');
        }
        
        public function deleteproduct( $id ){
            DB::table('products')
                -> where('id', $id)
                ->delete();
            DB::table('product_image')
                ->where('product_id', $id )
                ->delete();
            Session::flash('message', 'Sucessfully Deleted Product');
            return redirect()-> action('ProductController@allproducts');
        }
    }
