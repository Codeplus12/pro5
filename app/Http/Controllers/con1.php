<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\table1;

class con1 extends Controller
{
    function insert(request $req){

        $name = $req -> get('name');
        $photo = $req -> file('file') -> getClientOriginalName();

        $req -> file -> move(public_path('img'),$photo);

        $sql = new table1();

        $sql -> name = $name;
        $sql -> file = $photo;

        $sql -> save();

        return redirect('i');
    }

    function show(){
        $sql = table1::all();

        return view('show',['data'=> $sql]);
    }
}
