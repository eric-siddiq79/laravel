<?php

    namespace App\Http\Controllers;
    class  FrontendController extends Controller{

        public function index(){
            
        $info = [
            'name' => 'Rahman',
            'cell' => '01775099773',
        ];
        
            return View('welcome',compact('info'));
            //return redirect()->action('FrontendController@contact');
            //return redirect() -> route('user');
        }

        public function contact(){
            return View('frontend.contact');
        }
    }
