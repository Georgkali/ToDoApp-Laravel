<?php

use App\Http\Controllers\TodoController;


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('/');

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/todos/{todo}/done', [TodoController::class, 'done'])->name('done');

Route::resource('todos', TodoController::class);

Route::get('/bin', [TodoController::class, 'bin'])->name('todos.bin');

Route::post('/bin/{todo}', [TodoController::class, 'force'])->name('todos.force');





