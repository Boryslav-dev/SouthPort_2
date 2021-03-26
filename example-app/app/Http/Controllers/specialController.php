<?php

namespace App\Http\Controllers;

use App\Models\Special;
use App\Models\SpecialPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class specialController extends Controller
{
    public function create(Request $req){

        $special = new Special();

        $special->name = $req->input('name');
        $special->description = $req->input('description');
        $special->img =  $req->file('image')->store('uploads', 'public');
        $special->price = $req->input('price');
        $special->shortdesc = $req->input('shortdesc');

        if(!empty($req->file('photo[]'))){
            foreach ($req->photos as $photo) {
                $filename = $photo->store('photos', 'public');
                SpecialPhoto::create([
                    'special_name' => $special->name = $req->input('name'),
                    'filename' => $filename
                ]);
            }
        }

        $special->save();

        return redirect()->route('special')->with('success', 'Товар был добавлен');
    }

    public function deleteMessage($id){
        $img = DB::table('specials')->where('id', $id)->value('img');
        Storage::disk('public')->delete($img);
        $name = DB::table('specials')->where('id', $id)->value('name');
        $imgProduct = DB::table('special_photos')->where('special_name', $name)->select('id', 'filename')->get();
        foreach ($imgProduct as $item){
            SpecialPhoto::find($item->id)->delete();
        }
        foreach ($imgProduct as $item) {
            Storage::disk('public')->delete($item->filename);
        }
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

    public function randomData() {
        $special = new Special;
        return view('home', ['data'=>$special->inRandomOrder()->take(3)->get()]);
    }

    public function oneMessage($id){
        $special = new Special;
        $name = DB::table('specials')->where('id', $id)->value('name');
        $imgProduct = DB::table('special_photos')->where('special_name', $name)->select('filename')->get();
        return view('one-special', ['photo'=>$imgProduct], ['data'=> $special->find($id)]);
    }

    public function updateMessage($id) {
        $special = new Special;
        return view('special-update', ['data'=> $special->find($id)]);
    }

    public function createMessage() {
        return view('create');
    }
}
