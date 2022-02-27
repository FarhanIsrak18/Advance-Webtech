<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class DepartmentController extends Controller
{
    //department controller
    public function list(){
        $depts = department::all();
        return view('depts.list')->with('depts',$depts);
    }
    public function details(Request $req){
        $d = department::where('id',decrypt($req->id))->first();
        return view('depts.details')->with('d',$d) ;
    }

}
