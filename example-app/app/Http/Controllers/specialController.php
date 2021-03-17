<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;

class specialController extends Controller
{
    public function create(Request $req){

        $special = new Special();

        $special->name = $req->input('name');
        $special->description = $req->input('description');
        $special->img = $req->input('img');
        $special->price = $req->input('price');
        $special->shortdesc = $req->input('shortdesc');

        $special->save();

        return redirect()->route('special')->with('success', 'Товар был добавлен');
    }

    public function deleteMessage($id){
        Special::find($id)->delete();
        return redirect()->route('special')->with('success', 'Товар был успешно удалён');

    }

    public function updateMessageSubmit($id, Request $req){

        $special = Special::find($id);

        $special->name = $req->input('name');
        $special->description = $req->input('description');
        $special->img = $req->input('img');
        $special->price = $req->input('price');
        $special->shortdesc = $req->input('shortdesc');

        $special->save();

        return redirect()->route('special-data-one', $id)->with('success', 'Товар был изменён');
    }

    public function allData() {
        return view('special', ['data'=> Special::all()]);
    }

    public function oneMessage($id){
        $special = new Special;
        return view('one-special', ['data'=> $special->find($id)]);
    }

    public function updateMessage($id) {
        $special = new Special;
        return view('special-update', ['data'=> $special->find($id)]);
    }

    public function createMessage() {
        return view('create');
    }
}
