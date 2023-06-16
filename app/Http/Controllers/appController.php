<?php

namespace App\Http\Controllers;

use App\Models\app;
use Illuminate\Http\Request;

class appController extends Controller
{
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $app = new app();
            $app->app_name = $request->app_name;
            $app->save();
            return redirect()->back();
        } else {
            return view('app.add');
        }
    }
    public function index()
    {
        $apps = app::all();
        return view('app.index', compact('apps'));
    }
    public function edit(Request $request, app $app)
    {
        if ($request->getMethod() == 'POST') {
            $app->app_name = $request->app_name;
            $app->save();
            return redirect('app/index');
        } else {
            return view('app.edit', compact('app'));
        }
    }
    public function delete($id)
    {
        $app = app::findOrfail($id);
        $app->delete();
        return redirect()->back();
    }
}
