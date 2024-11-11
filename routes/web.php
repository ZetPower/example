<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my', '\App\Http\Controllers\MyPlaceController@index');
