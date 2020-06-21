<?php 
namespace App\Http\Controllers;

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

    public function allcategories(){
        return view("category");
    }
}