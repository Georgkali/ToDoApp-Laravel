<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Edit</h1>

<h1> <small>{{$todo->id}}</small> {{$todo->title}} </h1>

<p>{{$todo->content}}</p>

<form method="post" action="{{route('todos.destroy', $todo)}}">
    @csrf
    @method('delete')
    <button>Delete</button>
</form>
</body>
</html>
