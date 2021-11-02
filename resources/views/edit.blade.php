<x-layout>
<h1>Edit</h1>

<h1> <small>{{$todo->id}}</small> {{$todo->title}} </h1>

<p>{{$todo->content}}</p>

<form method="post" action="{{route('todos.destroy', $todo)}}">
    @csrf
    @method('delete')
    <button>Delete</button>
</form>
</x-layout>
