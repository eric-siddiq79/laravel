<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller{
        
        public function index(){
            return view('users.login');
        }
        
        public function registration(){
            return view('users.registration');
        }

        public function show( $id ){
            return $id;
        }
        
        public function display( $name ){
            return $name;
        }

        public function logout() {
            session::forget('username');
            return redirect()->action('UserController@index'); 
        }

        // public function saveConsultation( Request $request ){
        //     echo $request -> input('name');
        //     echo $request -> input('email');
        //     echo $request -> input('select');
        //     echo $request -> input('subject');
        //     echo $request -> input('message');
        // }

        public function saveuserinfo( Request $request){
            $username = $request -> input( 'username' );
            $password =  $request -> input( 'password' );

            $users = DB::select( 'select * from users where username=? and password=?', [ $username, $password ] );

            
          
            if( count( $users ) > 0 ){
                foreach ( $users as $user ){
                    $request -> session()->put('username', $user->username);
                    if( $username == $user->username && $password == $user->password ){
                        return redirect() -> route('admin');
                    }
                }
            }
            else{
                session::flash( "message", "Sorry enable to log in, try again!"); 
                return redirect() -> action('UserController@index');
             }
        }

        public function register( Request $request ) {
            $username = $request -> input( 'username' );
            $password =  $request -> input( 'password' );
            session::flash('message', 'Successfully created account!');
            DB::insert('insert into users (username, password) values(?,?)', [$username,$password] );
            return redirect() -> route('registration');
        }

       

    }