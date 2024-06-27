<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\con1;

Route::get('/', function () {
    return view('welcome');
});

Route::get('i', function () {
    return view('insert');
});

Route::get('s', function () {
    return view('show');
}); 

Route::post('go',[con1::class,'insert']);

Route::get('s',[con1::class,'show']);
