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

<h1>Login or <a href="/register">register</a></h1>
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/login">
@csrf
    <label for="email">E-mail</label>
    <input type="text" name="email">
    <br> <br>
    <label for="password">Password</label>
    <input type="password" name="password">

    <button type="submit">Log in</button>


</form>
</div>

</body>
</html>
