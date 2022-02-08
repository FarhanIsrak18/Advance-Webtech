<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function index(){
        return view('home.index');
    }
    public function register(){
        return view('home.register');
    }
    public function product(){
        return view('products.home');
    }
    public function add(){
        return view('products.add');
    }
    public function delete(){
        return view('products.delete');
    }

    public function edit(){
        return view('products.edit');
    }

    public function view(){
        return view('products.view');
    }


}
