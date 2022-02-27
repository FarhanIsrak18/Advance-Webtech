<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\customer;
use App\Models\student;
use App\Models\department;

class pagescontroller extends Controller
{
    
    // public function login(){
    //     return view('login');
    // }
    public function login(){
        return view('products.login');
    }

   public function logincheck(Request $req){
        $cust = customer::where('phone',$req->phone)->first();
       if($cust != null){
        return $this->view();
       }else{ return $this->login();}
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

    public function editsubmit(Request $req){
        $products = product::where('id','=',$req->id)->first();
        $products->name = $req->uname;
        $products->price = $req->price;
        $products->qty = $req->qty;
        $products->description = $req->des;
        $products->save();
        return $this->view();
    }
    public function delete(){
           
         return view('products.delete');
    }
    public function deletesubmit(Request $req){
        $products = product::where('id','=',$req->id)->delete();
        return $this->view();
    }
    public function view(){
        $products = product::all();
        return view('products.view')->with('products',$products);
    }
   
    public function loginsubmit(Request $req){
        $req->validate([
            'uname'=>'required|min:4|max:15',
            'price'=>'required|Numeric',
            'qty'=>'required|min:1|Numeric',
            'des'=>'required|string'

        ]);

        $pt = new product();
        $pt->name = $req->uname;
        $pt->price = $req->price;
        $pt->qty = $req->qty;
        $pt->description = $req->des;
        $pt->save();

        $products = product::all();
        return view('products.view')->with('products',$products);
        // return "product name is $req->uname and price is $req->price and quantity is $req->qty and $req->des";
    }
    
    public function userlogin(){
        return view('task3.login');
    }

}
