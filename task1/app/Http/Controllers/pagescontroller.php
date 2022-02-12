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
   
    public function view(){
        return view('products.view');
    }
    

}
