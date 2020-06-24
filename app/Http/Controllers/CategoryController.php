<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\DB;

Class CategoryController{

    public function category(){
        return view("category");
    }

    public function categories(){
        $categories = DB::select('Select * from categories');
        return view("categories", [ 'categories' => $categories ] );
    }

    public function deletecategory( $id ){
        DB::select('delete from categories where id=?', [ $id ] );
        Session::flash('message', 'Successfully Delete');
        return redirect()->action('CategoryController@categories') ;
    }

    public function updatecategory( $id ){
       $category = DB::select('select * from categories where id=?', [ $id ] );
       return view( 'updatecategory', ['category' => $category ]);
    }

    public function updatecategorydata( Request $request ){
        $name = $request-> input('catename');
        $code = $request->input('catecode');
        $id = $request->input('cat_id');
        DB::table('categories')
            ->where('id' , $id )
            ->update(['name' => $name, 'code' => $code]);
        
        Session::flash('message', 'Successfully Updated Category');
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
