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
Route::post('api_register','App\Http\Controllers\ApiController@api_register');
Route::post('api_login','App\Http\Controllers\ApiController@api_login');
Route::post('api_updateprofile','App\Http\Controllers\ApiController@api_updateprofile');
Route::post('api_productdetails','App\Http\Controllers\ApiController@api_productdetails');

Route::get('/', function () {
    return view('login');
});

Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('productlist','App\Http\Controllers\HomeController@productlist');
Route::get('userlist','App\Http\Controllers\HomeController@userlist');
Route::get('add_products','App\Http\Controllers\HomeController@add_products');
Route::post('save_products','App\Http\Controllers\HomeController@save_products');

Route::post('delete_products','App\Http\Controllers\HomeController@delete_products');

Route::get('edit_products/{id}','App\Http\Controllers\HomeController@edit_products');
Route::post('update_products','App\Http\Controllers\HomeController@update_products');
Route::get('logout','App\Http\Controllers\Auth\LoginController@logout');

Route::get('register', function () {
    abort(404);
});


