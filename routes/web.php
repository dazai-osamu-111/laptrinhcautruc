<?php

use App\Http\Controllers\OrderManagementController;
use Illuminate\Http\Request;
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


Route::get('/listOrderByUser', 'App\Http\Controllers\OrderManagementController@listOrderByUser');
Route::get('/getOrderByState/{status}', 'App\Http\Controllers\OrderManagementController@getOrderByStatus');
Route::get('/createOrder', 'App\Http\Controllers\OrderManagementController@createOrder');

Route::get('/save-order',[OrderManagementController::class,'saveOrder']);


Route::get('/listOrder', 'App\Http\Controllers\OrderManagementController@listOrder');
Route::get('/listOrderByStatus/{status}', 'App\Http\Controllers\OrderManagementController@listOrderByStatus');
