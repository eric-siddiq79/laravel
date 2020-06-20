<?php

    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\Session;

    class DashboardController extends Controller{
        public function index(){
            if( Session::has( 'username' ) ){
                return view('dashboard');
            }else{
                session::flash('message', 'Please Enter Login First' );
                return redirect()-> route('loginform');
            }
            
        }
    }