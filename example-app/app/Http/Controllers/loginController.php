<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function index()
    {
        return view('login');
    }

    public function submit(Request $request) {

        if ($request['login'] == 'alexander' && $request['password'] == 'ngfd3424') {
            session()->put('admin', 'alexander');
        }

        return redirect('/');
    }
}
