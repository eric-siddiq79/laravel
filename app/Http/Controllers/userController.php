<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class UserController extends Controller{
        public function index(){
            return view('users.form');
        }

        public function show( $id ){
            return $id;
        }
        
        public function display( $name ){
            return $name;
        }

        public function saveConsultation( Request $request ){
            echo $request -> input('name');
            echo $request -> input('email');
            echo $request -> input('select');
            echo $request -> input('subject');
            echo $request -> input('message');
        }

    }