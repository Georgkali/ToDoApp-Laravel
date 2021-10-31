<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/data', function () {
    return view('data', ['user' => Auth::user()['name']]);
});
