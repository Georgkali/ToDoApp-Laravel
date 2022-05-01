<x-loggedin>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Content
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Created at
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Deleted at
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($todos as $todo)

                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">

                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 ">

                                                {{$todo->title}}

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <p class="max-w-prose...">  {{$todo->content}} </p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{$todo->created_at  }}
                </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{$todo->deleted_at}}
                </span>
                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <form method="post" action="{{route('todos.force', $todo)}}">
                                        @csrf
                                        <button class="text-indigo-600 hover:text-indigo-900" onclick="return confirm('Are you really' +
                                            ' want to delete {{$todo->title}} todo')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-loggedin>