<?php

    namespace App\Http\Controllers;
    use App\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class  FrontendController extends Controller{

        public function index(){
            $categories = DB::select('select * from categories');
            $dealproducts = DB::table('products')-> select('*')-> where('home_section', 'dealsday')->get();
            $lastestproducts = DB::table('products')-> select('*')-> where('home_section', 'latestproduct')->get();
            $pickforyou = DB::table('products')-> select('*')-> where('home_section', 'pickforyou')->get();
            
            $test = Product::all();
            return View('welcome', ['categories' => $categories, 'deals' => $dealproducts, 'latestproducts' => $lastestproducts, 'pickforyours' =>  $pickforyou ]);
        }

        public function contact(){
            return View('frontend.contact');
        }
    }
