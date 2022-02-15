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
Route::get('/Home page',[pagescontroller::class,'home'])->name('home');
Route::get('/contacts',[pagescontroller::class,'contacts'])->name('contacts');
Route::get('/admin',[pagescontroller::class,'admin'])->name('admin');
Route::get('/student',[pagescontroller::class,'student'])->name('student');



Route::get('/student/get',[StudentsController::class,'get']);

Route::get('/product',[pagescontroller::class,'product'])->name('product');
Route::get('/product/add',[pagescontroller::class,'add'])->name('add');
Route::get('/product/delete',[pagescontroller::class,'delete'])->name('delete');
Route::get('/product/edit',[pagescontroller::class,'edit'])->name('edit');
Route::get('/product/view',[pagescontroller::class,'view'])->name('view');

Route::post('/login',[pagescontroller::class,'loginsubmit'])->name('login.submit');
