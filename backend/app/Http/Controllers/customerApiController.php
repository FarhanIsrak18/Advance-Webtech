<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use App\Models\alluser;
use App\Models\customer;
use App\Models\order;
use Illuminate\Support\Facades\Mail;


class customerApiController extends Controller
{
    //Customer

    public function getAllCustomer(){
        
        $customer = alluser::where('usertype','customer')->get();

        return response($customer, 200);
    }

    public function getOneCustomer($id){
        $customer = alluser::where('usertype','customer')->where('id',$id)->first();
        return response($customer, 200);
    }

    public function edit(Request $req)
    {
        $alluser = alluser::where('id', $req->id)->first();
        $alluser->username = $req->username;
        $alluser->email = $req->email;
        $alluser->phone = $req->phone;
        $alluser->dob = $req->dob;
        $alluser->save();
        
        $customer = customer::where('id', $req->id)->first();
        $customer->username = $req->username;
        $customer->email = $req->email;
        $customer->phone = $req->phone;
        $customer->dob = $req->dob;
        $customer->save();

        return response($alluser, 200);
    }

    public function add(Request $req)
    {
        $alluser = new alluser;
        // $alluser->id = $req->id;
        $alluser->password = $req->password;
        $alluser->email = $req->email;
        $alluser->phone = $req->phone;
        $alluser->dob = $req->dob;
        $alluser->gender = $req->gender;
        $alluser->usertype = "customer";
        $alluser->active_status = "active";
        $alluser->save();
        
        $customer = new customer;
        // $customer->id = $req->id;
        $customer->username = $req->username;
        $customer->password = $req->password;
        $customer->email = $req->email;
        $customer->phone = $req->phone;
        $customer->dob = $req->dob;
        $customer->gender = $req->gender;
        $customer->usertype = "customer";
        $customer->active_status = "active";
        $customer->save();
        return response($alluser, 200);
    }

    public function delete($id)
    {
        $customer = alluser::where('id', $id)->first();
       
        $found = $customer->delete();
        if ($found) return response("Deleted successfully", 200);
        return response("Delete failed", 404);
    }
//customer controller

public function orderlist(){
        
    $order = order::all();

    return response($order, 200);
}
public function order(Request $req)
{
    $order = new order;
    // $alluser->id = $req->id;
    $order->customer_name = $req->customer_name;
    $order->list = $req->list;
    $order->amount = $req->amount;
    $order->branch = $req->branch;
    $order->address = $req->address;
    $order->status = "pending";
    $order->save();
    return response($order, 200);

}
public function orderCancel($id)
    {
        $order = order::where('id', $id)->first();
       
        $found = $order->delete();
        if ($found) return response("Order Canceled", 200);
        return response("cancellation failed", 404);
    }

public function orderedit(Request $req)
{
    $order = order::where('id',$req->$id)->first();
    $order->id = $req->id;
    $order->customer_name = $req->customer_name;
    $order->list = $req->list;
    $order->amount = $req->amount;
    $order->branch = $req->branch;
    $order->address = $req->address;
    $order->status = "pending";
    $order->save();
    return response($order, 200);

}

public function mailSend()
{
    $subject="Testing Mail";
    $body="This is a testing mail from Farhan Israk using laravel";
    Mail::to('shahidinfo.45@gmail.com')->send(new sendMail($subject,$body));
    return "done";
}

public function login(Request $req)
{
    $customer = alluser::where('email',$req->email)->where('password',$req->password)->first();
    return response($customer, 200);
}

}
