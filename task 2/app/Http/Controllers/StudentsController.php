<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function create(){
        return view('student.create');
    }
    public function edit(){
        return view('student.edit');
    }
    public function delete(){
        return view('student.delete');
    }
    public function get(){
        $student = array(
            "name" => "farhan",
            "id"  =>  123,
            "dept" => "CSe"
        );
        $sub=12-2;
        $student = (object) $student;
        return view('student.get')
        -> with('student',$student)
        ->with('sub',$sub);
        ;
    }
}
