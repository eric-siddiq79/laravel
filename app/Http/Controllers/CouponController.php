<?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    
    class CouponController extends Controller
    {
        public function index(){
            return view('coupon');
        }
        
        public function showAllcoupon(){
            $coupons = DB::table('voucer')->select(['id', 'name', 'discount', 'status'])->get();
            return view('coupons', ['coupons' => $coupons]);
        }
        
        public function saveCoupon( Request $request){
            $cpcode = $request->couponcode;
            $cpdiscount = $request->coupondiscount;
            DB::table('voucer')
                ->insertGetId([
                    'name' => $cpcode,
                    'discount' => $cpdiscount,
                    'status' => 1
                ]);
            return redirect()-> action('CouponController@showAllcoupon');
        }
        
        public function  couponeditform(Request $request){
            $id = $request->id;
            $couponinfo = DB::table('voucer')->where('id', $id)->select(['id', 'name', 'discount'])->get();
            return view('updatecoupon', ['couponinfo' =>  $couponinfo]);
        }
        
        public function deletecoupon( Request $request){
            $id = $request-> id;
            DB::table('voucer')->where('id', $id)->delete();
            session::flash('message', 'Successfully Delete Coupon');
            return redirect()-> action('CouponController@showAllcoupon');
        }
        
        public function editcoupon( Request $request){
            $id = $request->id;
            $name = $request->couponcode;
            $discount = $request->coupondiscount;
            DB::table('voucer')->where('id', $id)->update(['name' => $name, 'discount' => $discount]);
            session::flash('message', 'Successfully Updated Coupon');
            return redirect()-> action('CouponController@showAllcoupon');
        }
        
        public function checkcoupon( Request $request){
           $coupon = $request->get('coupon');
           $couponCode = DB::table('voucer')->where('name', $coupon)->select(['name', 'discount', 'status'])->get();
           if( count( $couponCode) > 0 ){
               return response()->json($couponCode, 200);
           }else{
               return response()->json('Have No Coupon!', 200);
           }
        }
    }
