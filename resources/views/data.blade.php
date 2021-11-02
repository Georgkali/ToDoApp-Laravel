<x-layout>
<h1>welcome</h1>
<form method="post" action="/logout">
    @csrf
    <button>logout</button>
</form>
<br>

<form method="post" action="{{ route('todos.store', ['todo' => new \App\Models\Todo()])  }}">
    @csrf
    <input type="text" name="title">
    <br><br>
    <input type="text" name="content">
    <br><br>
    <button>add</button>
</form>

@foreach($todos as $todo)
    <h1> <small>{{$todo->id}}</small> <a href="{{ route('todos.show', $todo) }}">{{$todo->title}}</a> </h1>

    <p>{{$todo->content}}</p>
@endforeach
</x-layout>
