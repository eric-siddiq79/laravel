<?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\DB;

Class CategoryController{
    public function index(){
        return view('product');
    }

    public function category(){
        return view("category");
    }

    public function allproducts(){
        return view('product');
    }

    public function categories(){
        $categories = DB::select('Select * from categories');
        return view("categories", [ 'categories' => $categories ] );
    }

    public function deletecategory( $id ){
        DB::select('delete from categories where code=?', [ $id ] );
        Session::flash('message', 'Successfully Delete');
        return redirect()->action('CategoryController@categories') ;
    }

    public function updatecategory( $id ){
       $category = DB::select('select * from categories where code=?', [ $id ] );
       return view( 'updatecategory', ['category' => $category ]);
    }

    public function updatecategorydata( Request $request ){
        $name = $request-> input('catename');
        $code = $request->input('catecode');
        DB::update('update categories set name = ?, code = ?', [ $name, $code ]);
        return redirect()->action('CategoryController@categories') ;
    }

    public function savecategory( Request $request){
        $name = $request-> input('catename');
        $code = $request->input('catecode');
        $userId = Session::get('username');
        $getUsers = DB::select('select * from users where username=?', [$userId] );
        
        foreach ( $getUsers as $user ){
            DB::insert('insert into categories (name, code, userid) values(?, ?, ?)', [ $name, $code, $user->id] );
        }
        Session::flash('message', 'Successfully Created Category');
        return redirect() -> route('categories');
    }
}