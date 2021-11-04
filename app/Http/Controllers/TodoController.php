<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('data', ['todos' => Todo::all()->values()->reverse()]);
    }


    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        (new Todo([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]))->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('edit', ['todo' => $todo]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $todo->update([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);

        return $this->index();
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return $this->index();
    }


    public function done(Todo $todo)
    {

        $todo->update([
            'completed' => true
        ]);

        $todo->save();
        return $this->index();
    }

}
