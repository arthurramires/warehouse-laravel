<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('products', 'ProductsController@register');
Route::delete('products', 'ProductsController@delete');
Route::get('products', 'ProductsController@show');
Route::put('products', 'ProductsController@update');

Route::post('customers', 'CustomersController@register');
Route::delete('customers', 'CustomersController@delete');
Route::get('customers', 'CustomersController@show');
Route::put('customers', 'CustomersController@update');
Route::resource('sales', 'SalesController', ['except' => ['create', 'edit']]);
Route::resource('purchases', 'PurchasesController', ['except' => ['create', 'edit']]);




