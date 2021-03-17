<?php

namespace App\Http\Controllers;

use App\Http\Requests\orderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\newMail;

class orderController extends Controller
{
    function pullers()
    {
        return view('pullers');
    }

    function linearsupp()
    {
        return view('linearsupp');
    }

    function rte()
    {
        return view('rte');
    }

    function induct()
    {
        return view('induct');
    }

    function send(orderRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = array(
            'email'     =>   $request->email,
            'product'   =>   $request->product,
            'count'     =>   $request->count,
            'name'      =>   $request->name,
            'tel'       =>   $request->tel,
            'title'     =>   $request->title,
            'message'   =>   $request->message
        );

        Mail::to('kuchkov70@gmail.com')->send(new newMail($data));
        return back()->with('success', 'Ваш заказ успешно принят!');

    }
}
