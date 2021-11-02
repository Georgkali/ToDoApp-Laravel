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
    //  public function index()
    //{
    //    return view('data', ['todos' => Todo::all()]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

        return redirect()->route('data');
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

    public function edit(Request $request)
    {

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

        return redirect()->route('data');
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('data');
    }
}
