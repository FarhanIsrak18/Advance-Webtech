<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\StudentsController;

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


Route::get('/login',[pagescontroller::class,'login'])->name('login');
Route::get('/',[pagescontroller::class,'index'])->name('home');
Route::get('/reg',[pagescontroller::class,'register'])->name('registration');


Route::get('/student/create',[StudentsController::class,'create']);
Route::get('/student/edit',[StudentsController::class,'edit']);
Route::get('/student/delete',[StudentsController::class,'delete']);
Route::get('/student/get',[StudentsController::class,'get']);

Route::get('/product',[pagescontroller::class,'product'])->name('product');
Route::get('/product/add',[pagescontroller::class,'add'])->name('add');
Route::get('/product/delete',[pagescontroller::class,'delete'])->name('delete');
Route::get('/product/edit',[pagescontroller::class,'edit'])->name('edit');
Route::get('/product/view',[pagescontroller::class,'view'])->name('view');