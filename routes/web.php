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


Route::get('frontside', 'FrontendController@index');
Route::get('frontside/contact', 'FrontendController@contact');
Route::get('user', 'UserController@index')->name('user');
Route::POST('saveConsultation', 'UserController@saveConsultation') ->name('saveConsultation');
// Route::get('saveConsultation', 'UserController@saveConsultation') ->name('saveConsultation');


//Route::get('user/{id}', 'UserController@show')->where('id', '[0-9]+');
Route::get('user/{name}', 'UserController@display')->where('name', '[a-z]+');

Route::get('admin', function(){
    return view('dashboard');
});