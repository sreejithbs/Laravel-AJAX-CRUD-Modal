<?php
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


//Display Index Page
Route::get('/product', 'ProductController@index');


// Populate Data in Edit Modal Form
Route::get('product/{product_id?}', 'ProductController@show');


//create New Product
Route::post('product', 'ProductController@store');


// update Existing Product
Route::put('product/{product_id}', 'ProductController@update');


// delete product
Route::delete('product/{product_id}', 'ProductController@destroy');
