<x-loggedin>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        <tr>
                            <form method="post"
                                  action="{{ route('todos.store', ['todo' => new \App\Models\Todo()])  }}">
                                @csrf
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">

                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <input type="text" name="title" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <input type="text" name="content" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm">
                                    </div>
                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                    <button class="text-indigo-600 hover:text-indigo-900">Save</button>
                                </td>
                            </form>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-loggedin>
