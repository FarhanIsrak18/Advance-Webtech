<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/customer/getall',[customerApiController::class, 'getAllCustomer']);
// Route::get('/customer/getById/{id}',[customerApiController::class, 'getOneCustomer']);
// Route::post('/customer/edit',[customerApiController::class, 'edit']);
// Route::post('/customer/add',[customerApiController::class, 'add']);
// Route::post('/customer/delete/{id}',[customerApiController::class, 'delete']);
// Route::get('/customer/orderlist',[customerApiController::class, 'orderlist']);
// Route::post('/customer/order',[customerApiController::class, 'order']);
// Route::post('/customer/orderCancel/{id}',[customerApiController::class, 'orderCancel']);
// Route::post('/customer/orderedit',[customerApiController::class, 'orderedit']);