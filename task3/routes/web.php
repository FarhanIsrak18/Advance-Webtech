<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DepartmentController;

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


// Route::get('/login',[pagescontroller::class,'login'])->name('login');
Route::get('/Home page',[pagescontroller::class,'home'])->name('home');
Route::get('/contacts',[pagescontroller::class,'contacts'])->name('contacts');
Route::get('/admin',[pagescontroller::class,'admin'])->name('admin');
Route::get('/student',[pagescontroller::class,'student'])->name('student');

//DepartmentController->DC
Route::get('/list/{id}',[DepartmentController::class,'list'])->name('list');
Route::get('/department/details/{id}',[DepartmentController::class,'details'])->name('department.details');



//end->dc

//studentcontroller->sc
Route::get('/student/login',[StudentsController::class,'login'])->name('login');
Route::get('/student/register',[StudentsController::class,'login'])->name('register');
Route::get('/student/create',[StudentsController::class,'login'])->name('create');
Route::get('/student/edit',[StudentsController::class,'login'])->name('login');
Route::get('/student/delete',[StudentsController::class,'login'])->name('login');
// Route::get('/student/get',[StudentsController::class,'get']);
//end->sc


Route::get('/product',[pagescontroller::class,'product'])->name('product');
Route::get('/product/add',[pagescontroller::class,'add'])->name('add');
Route::get('/product/delete',[pagescontroller::class,'delete'])->name('delete');
Route::get('/product/edit',[pagescontroller::class,'edit'])->name('edit');
Route::get('/product/view',[pagescontroller::class,'view'])->name('view');
Route::get('/login',[pagescontroller::class,'login'])->name('login');

Route::post('/loginsubmit',[pagescontroller::class,'loginsubmit'])->name('login.submit');
Route::post('/product/delete',[pagescontroller::class,'deletesubmit'])->name('deletesubmit');
Route::post('/product/edit',[pagescontroller::class,'editsubmit'])->name('editsubmit');
Route::post('/customer/login',[pagescontroller::class,'logincheck'])->name('logincheck');

 Route::get('/task3/login',[pagescontroller::class,'userlogin'])->name('userlogin');


