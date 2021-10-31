<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('/');

Route::middleware('auth')->get('/data', function () {
    return view('data', ['user' => Auth::user()['username'],
        'todos' => Todo::all()->values()->reverse()]);
})->name('data');

Route::resource('todos', TodoController::class);



