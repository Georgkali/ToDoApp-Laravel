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
</body>
</html>
