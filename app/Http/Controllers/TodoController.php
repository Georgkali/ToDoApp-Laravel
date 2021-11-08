<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where('user_id', auth()->id())->orderByDesc('created_at')->paginate(10);

        return view('data', ['todos' => $todos]);
    }

    public function bin()
    {
        $todos = Todo::onlyTrashed()->where('user_id', auth()->id())->paginate(10);

        return view('bin', ['todos' => $todos]);
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
        $todo = new Todo([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);
        $todo->user()->associate(auth()->user());

        $todo->save();

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

    public function force($todo)
    {

        Todo::onlyTrashed()->where('id', $todo)->forceDelete();
        return $this->index();
    }


    public function done(Todo $todo)
    {
        $todo->completed_at === null ? $todo->update(['completed_at' => Carbon::now()]) : $todo->update(['completed_at' => null]);
        return $this->index();
    }

}
