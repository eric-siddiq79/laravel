<?php
    
    namespace App\Http\Controllers;
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
