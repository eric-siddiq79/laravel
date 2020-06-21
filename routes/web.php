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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('admin', function(){
//     return view('dashboard');
// });


Route::get('frontside', 'FrontendController@index');
Route::get('frontside/contact', 'FrontendController@contact');
// Route::get('user', 'UserController@index')->name('user');
Route::get('login', 'UserController@index')->name('loginform');
Route::POST('saveConsultation', 'UserController@saveConsultation') ->name('saveConsultation');
Route::POST('saveuserinfo', 'UserController@saveuserinfo') ->name('saveuserinfo');
Route::get('registration', 'UserController@registration')->name("registration");
Route::POST('register', 'UserController@register')->name("register");
Route::get('admin', 'DashboardController@index')->name('admin');
Route::get('logout', 'UserController@logout')->name('logout');
// Route::get('saveConsultation', 'UserController@saveConsultation') ->name('saveConsultation');

Route::get('role', 'UserController@role')->name('role');
Route::get('allrole', 'UserController@allrole')->name('allrole');


Route::get('productform', 'CategoryController@index')->name('productform');
Route::get('products', 'CategoryController@allproducts')->name('products');
Route::get('categoryform', 'CategoryController@category')->name('categoryform');
Route::get('categories', 'CategoryController@allcategory')->name('categories');


//Route::get('user/{id}', 'UserController@show')->where('id', '[0-9]+');
Route::get('user/{name}', 'UserController@display')->where('name', '[a-z]+');
