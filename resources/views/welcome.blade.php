<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
         <!-- Styles -->
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>

        @livewireStyles
    </head>
    <body class="bg-slate-800">
        {{-- <div class="relative flex items-top justify-center bg-gray-800 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> --}}
        <div class=" h-[32rem] w-full bg-cover bg-bottom filter blur-0 z-0 relative" style="background-image: url('{{ asset('/assets/flat-mountains.svg') }}');">

        </div>

        <div id='form-container' class="w-full flex justify-center -my-20 z-10 relative">

            <div class="bg-sky-300 backdrop-filter backdrop-blur-2xl rounded-lg shadow-xl w-96 bg-clip-padding flex flex-col justify-center space-y-10">

                <div class="text-center flex-col space-y-2 px-12 bg-sky-500 pt-10 rounded-t-lg relative">
                    <h1 class="text-4xl font-extrabold text-white">
                        Snowflake
                    </h1>
                    <p class="text-white font-semibold pb-4">
                        Search for your favoutire snow resort and get results.
                    </p>
                    <div class="flex justify-center">
                        <x-svg class="bottom-0 text-white -mb-3" svg='snowflake' />
                    </div>
                </div>

                <div class="relative px-6 pb-8 rounded-b-lg">
                    <input id="snow-resorts" class='peer rounded w-full placeholder-transparent border-sky-500 focus:border-sky-400 focus:outline-sky-200 focus:outline-4' type="text" placeholder="Search for a Snow Resort">
                    <label class="absolute left-9 -top-6 text-gray-600 text-small transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-placeholder-shown:left-9" for="snow-resorts" >Search for a Snow Resort</label>
                </div>

            </div>
        </div>
        @livewireScripts
    </body>
</html>
