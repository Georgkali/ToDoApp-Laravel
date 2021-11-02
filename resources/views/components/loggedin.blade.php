<!doctype html>
<html lang="en" class="text-gray-900 leading-tight">
<head>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Todo App</title>
</head>
<body class="font-sans bg-gray-100 text-white">
<div>



    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">

                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <strong>To Do</strong>
                    </div>

                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">List</a>

                            <a href="{{route('todos.create')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Add</a>



                        </div>


                    </div>
                </div>

                <form method="post" action="/logout">
                    @csrf
                    <button class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">logout</button>
                </form>

            </div>
        </div>

    </nav>

    {{ $slot }}

</div>
</body>
</html>
