<?php

namespace App\Http\Controllers;

use App\Http\Requests\orderRequest;
use App\Mail\orderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class orderMailController extends Controller
{

    function index()
    {
        return view('order');
    }

    function send(orderRequest $request): \Illuminate\Http\RedirectResponse
    {

        $data = array(
            'email'     =>   $request->email,
            'name'      =>   $request->name,
            'tel'       =>   $request->tel,
            'title'     =>   $request->title,
            'message'   =>   $request->message,
            'file'      =>   $request->file('file')->store('documents', 'public')
        );

        Mail::to('kuchkov70@gmail.com')->send(new orderMail($data));
        return back()->with('success', 'Ваше письмо успешно отправленно!');

    }
}
