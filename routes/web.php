<?php
    
    use Illuminate\Support\Facades\Route;
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    
    /* home */
    Route::get('/', 'FrontendController@index');
    Route::get('frontside/contact', 'FrontendController@contact');
    
    
    Route::POST('saveConsultation', 'UserController@saveConsultation') ->name('saveConsultation');
    Route::POST('saveuserinfo', 'UserController@saveuserinfo') ->name('saveuserinfo');
    
    /* user */
    Route::get('login', 'UserController@index')->name('loginform');
    Route::get('registration', 'UserController@registration')->name("registration");
    Route::POST('register', 'UserController@register')->name("register");
    Route::get('admin', 'DashboardController@index')->name('admin');
    Route::get('logout', 'UserController@logout')->name('logout');
    
    /* user role */
    Route::get('role', 'UserController@role')->name('role');
    Route::get('allrole', 'UserController@allrole')->name('allrole');
    
    /* Products */
    Route::get('productform', 'ProductController@productform')->name('productform');
    Route::POST('saveproduct', 'ProductController@saveproduct')->name('saveproduct');
    Route::get('products', 'ProductController@allproducts')->name('products');
    Route::get('editproduct/{id}', 'ProductController@editproduct')->name('editproduct');
    Route::get('deleteproduct/{id}', 'ProductController@deleteproduct')->name('deleteproduct');
    Route::POST('updateproductdata', 'ProductController@updateproductdata')->name('updateproductdata');
    
    /* cart */
    Route::get('cart', 'ProductController@cart')->name('cart');
    Route::get('addtocart/{id}', 'ProductController@addToCart')->name('addToCart');
    Route::patch('update-cart', 'ProductController@update');
    Route::delete('remove-from-cart', 'ProductController@remove');
    
    
    /* checkout */
    Route::get('checkout', 'CheckoutController@index')->name('checkout');
    
    /* coupon */
    Route::get('createcoupon', 'CouponController@index')->name('createcoupon');
    Route::get('savecoupon', 'CouponController@savecoupon')->name('savecoupon');
    Route::get('coupons', 'CouponController@showAllcoupon')->name('coupons');
    Route::get('couponeditform/{id}', 'CouponController@couponeditform')->name('couponeditform');
    Route::get('editcoupon', 'CouponController@editcoupon')->name('editcoupon');
    Route::get('deletecoupon/{id}', 'CouponController@deletecoupon')->name('deletecoupon');
    Route::get('checkcoupon', 'CouponController@checkcoupon');
    
    
    
    /* category */
    Route::get('categoryform', 'CategoryController@category')->name('categoryform');
    Route::POST('savecategory', 'CategoryController@savecategory') -> name('savecategory');
    Route::get('categories', 'CategoryController@categories')->name('categories');
    Route::get('updatecategory/{id}', 'CategoryController@updatecategory')->name('updatecategory');
    Route::get('deletecategory/{id}', 'CategoryController@deletecategory')->name('deletecategory');
    Route::POST('updatecategorydata', 'CategoryController@updatecategorydata')->name('updatecategorydata');
    
    
    
