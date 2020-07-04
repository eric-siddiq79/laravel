<?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Product;
    
    
    class Cartscontroller extends Controller{
        public function index(){
            $categories = Carts::all();
            die();
            
            return view( 'wellcome');
        }
        public function cart() {
            return view('cart');
        }
        public function addToCart($id){
        
        }
    }
