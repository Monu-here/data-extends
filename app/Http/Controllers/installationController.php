<?php

namespace App\Http\Controllers;
use App\Models\installation;
use App\Models\app;
use App\Models\customer;
use Illuminate\Http\Request;

class installationController extends Controller
{
    public function add(Request $request) {
        if ($request->getMethod() == 'POST') {
            $installation = new installation();
            $installation->customer_name= $request->customer_name;
            $installation->app_name=$request->app_name;
            $installation->url=$request->url;
            $installation->info=$request->info;
            $installation->anydesk=$request->anydesk;
            $installation->clent=$request->clent;
            $installation->installation_date=$request->installation_date;
            $installation->valid_date=$request->valid_date;
            $installation->save();

            return redirect()->back();

        }
        else {
            $customers = customer::all();
            $apps = app::all();
            return view('installation.add', compact('customers','apps'));
        }
    }
    function index() {
        $installations = installation::all();
        // $customers = customer::all();
        // $apps = app::all();
        return view('installation.index', compact('installations'));
    }
    function edit(Request $request, installation $installation )  {
        if ($request->getMethod()=='POST') {
            $installation->customer_name= $request->customer_name;
            $installation->app_name=$request->app_name;
            $installation->url=$request->url;
            $installation->info=$request->info;
            $installation->anydesk=$request->anydesk;
            $installation->clent=$request->clent;
            $installation->installation_date=$request->installation_date;
            $installation->valid_date=$request->valid_date;
            $installation->save();
            return redirect('installation/index');
        }
        else{
            $customers = customer::all();
            $apps = app::all();
            return view('installation.edit', compact('installation','customers','apps'));
        }
    }
    function delete($id) {
        $installation=installation::findOrfail($id);
        $installation->delete();
        return redirect()->back();
    }
}
