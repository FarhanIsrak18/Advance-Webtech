<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function admin(){
        return view('Task1.admin');
    }
    public function student(){
        return view('Task1.student');
    }
    public function home(){
        $course= [
            "Programming with python" => [
                "Instructor" => "tony sir",
                "duration" => "4 months" ,
                "starts" => "11th jan"
            ],

            "Addvance webtech" => [
                "Instructor" => "tanvir sir",
                "duration" => "4 months" ,
                "starts" => "11th dec"
            ],

            "Engineering management" => [
                "Instructor" => "shahid sir",
                "duration" => "4 months" ,
                "starts" => "11th Nov"
            ]
        ];
        $courses = (object)$course; 
        return view('Task1.home')->with('courses',$courses);
       
    }
    public function contacts(){
        $course= [
            "Tanvir Ahmed" => [
                "Developer " ,
                "t.a@st.edu ",            
            ],

            " Rayhan Uddin " => [
                "Co-ordinator " ,
                "r.u@st.edu " ,
            ],

            "Mushfiq Rahman" => [
                "Manager",
                "ms@st.edu",
            ]
        ];
        $courses = (object)$course; 
        return view('home.contacts')->with('courses',$courses);
    }
    public function product(){
        return view('products.home');
    }
    public function add(){
        return view('products.add');
    }
    public function edit(){
        return view('products.edit');
    }
    public function delete(){
        return view('products.delete');
    }
    public function view(){
        return view('products.view');
    }
   
    public function loginsubmit(Request $req){
        $req->validate([
            'uname'=>'required|min:4|max:15',
            'price'=>'required|Numeric',
            'qty'=>'required|min:1|Numeric',
            'des'=>'required|string'

        ]);
        $req->uname;
        $req->price;
        $req->qty;
        $req->des;

        return "product name is $req->uname and price is $req->price and quantity is $req->qty and $req->des";
    }
    

}
