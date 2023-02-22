<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('listOrderByUser/{userId}', 'App\Http\Controllers\OrderManagermentRestController@listOrderByUser');
Route::get('getOrderById/{orderId}', 'App\Http\Controllers\OrderManagermentRestController@getOrderById');
Route::get('getOrderByState/{status}', 'App\Http\Controllers\OrderManagermentRestController@getOrderByStatus');
Route::post('UpdateOrderStatus/{orderId}', 'App\Http\Controllers\OrderManagermentRestController@updateOrderStatus');
Route::post('createNewOrder', 'App\Http\Controllers\OrderManagermentRestController@createNewOrder');

// Route::get('listOrderByUser/{userId}', 'App\Http\Controllers\OrderManagermentRestController@listOrderByUser');

Route::post('rate-comment/{orderId}', 'App\Http\Controllers\OrderManagermentRestController@rateComment');
Route::post('/save-order','App\Http\Controllers\OrderManagermentRestController@saveOrder');
Route::get('/create-order/{userId}','App\Http\Controllers\OrderManagermentRestController@createOrder');



Route::get('/listOrder', 'App\Http\Controllers\OrderManagermentRestController@listOrder');
Route::get('/listOrderByStatus/{status}', 'App\Http\Controllers\OrderManagermentRestController@listOrderByStatus');

Route::post('/update-productStatus/{productId}','App\Http\Controllers\OrderManagermentRestController@update_productStatus');
