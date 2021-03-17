<?php

namespace App\Http\Controllers;

use App\Http\Requests\mailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\newMail;

class mailController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function send(mailRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = array(
            'email'     =>   $request->email,
            'product'   =>   $request->product,
            'name'      =>   $request->name,
            'tel'       =>   $request->tel,
            'title'     =>   $request->title,
            'message'   =>   $request->message
        );

        Mail::to('kuchkov70@gmail.com')->send(new newMail($data));
        return back()->with('success', 'Ваше письмо успешно отправленно!');

    }
}
