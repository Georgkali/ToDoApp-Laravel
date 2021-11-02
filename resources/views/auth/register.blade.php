<x-layout>





    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        @if ($errors->any())
            <div class="alert alert-danger text-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="max-w-md w-full space-y-8">
            <div>

                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Register
                </h2>

            </div>
            <form class="mt-8 space-y-6" action="/register" method="POST">
                @csrf

                <div class="rounded-md shadow-sm -space-y-px">
                    <div>

                        <input id="name" name="name" type="text" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Name">
                    </div>


                    <div>

                        <input id="email-address" name="email" type="email" autocomplete="email" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Email address">
                    </div>
                    <div>

                        <input id="password" name="password" type="password" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Password">
                    </div>

                    <div>

                        <input id="password" name="password_confirmation" type="password" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Repeat password">
                    </div>
                </div>

                <div class="flex items-center justify-between">


                </div>

                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm
                            font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-layout>
