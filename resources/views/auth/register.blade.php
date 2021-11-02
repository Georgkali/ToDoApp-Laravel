<x-layout>
    <h1 class="title m-b-md bg-blue-500">Register</h1>

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
</x-layout>
