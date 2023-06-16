<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{

    public function add(Request $request) {
        if ($request->getMethod() == "POST") {
            $customer = new customer();
            $customer->customer_name=$request->customer_name;
            $customer->orz=$request->orz;
            $customer->phone=$request->phone;
            $customer->address=$request->address;
            $customer->email=$request->email;
            $customer->save();
            return redirect()->back();
        }
        else {
            return view('customer.add');
        }

    }
    public function index() {
        $customers = customer::all();
        return view('customer.index',compact('customers'));
    }
    public function edit(Request $request, customer $customer) {
        if ($request->getMethod()=='POST') {
            $customer->customer_name=$request->customer_name;
            $customer->orz=$request->orz;
            $customer->phone=$request->phone;
            $customer->address=$request->address;
            $customer->email=$request->email;
            $customer->save();
            return redirect('customer/index');
        }
        else {
            return view('customer.edit',compact('customer'));
        }
    }
    public function delete($id) {
        $customer = customer::findOrfail($id);
        $customer->delete();
        return redirect()->back();
    }
}
