<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function home(){
        return view('Task1.home');
    }
    public function create(){
        return view('Task1.create');
    }
    public function edit(){
        return view('Task1.edit');
    }
    public function delete(){
        return view('Task1.delete');
    }
    public function get(){
        $student = array(
            "name" => "farhan",
            "id"  =>  123,
            "dept" => "CSe"
        );
        $sub=12-2;
        $student = (object) $student;
        return view('Task1.get')
        -> with('student',$student)
        ->with('sub',$sub);
        ;
    }
}
