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
<h1>Register</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/register">
    @csrf
    <label for="name">Username</label>
    <input type="text" name="name">

    <br> <br>
    <input type="email" name="email">
    <label for="email">e-mail</label>
    <br> <br>
    <input type="password" name="password">
    <label for="password">Password</label>
    <br>
    <input type="password" name="password_confirmation">
    <label for="password">Repeat password</label>
    <button type="submit">Register</button>
</form>

</body>
</html>
