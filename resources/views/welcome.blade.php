<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Intelliflex</title>
    <nav class=" bg-white shadow-md border py-auto h-20">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ asset('/assets/logo/intelliflex_official-logo-h.png') }}" class="h-16 mt-2" alt="">
            </a>

            <div class="flex">
                @if (Route::has('login'))
                        @auth
                            {{-- <a href="{{ url('/home') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}

                            <a href="{{ url('/home') }}"
                                class="text-blue-600 bg-slate-100 hover:bg-blue-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-slate-100 dark:hover:bg-blue-100 dark:focus:ring-slate-300">HOME
                            </a>
                        @else
                            {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                                in</a> --}}

                            <a href="{{ route('login') }}"
                                class="text-blue-600 bg-slate-100 hover:bg-blue-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-slate-100 dark:hover:bg-blue-100 dark:focus:ring-slate-300">LOGIN
                            </a>

                            @if (Route::has('register'))
                                {{-- <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}

                                <a href="{{ route('register') }}"
                                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-200 ml-4 shadow-lg">REGISTER
                                </a>
                            @endif
                        @endauth
                @endif
            </div>
    </nav>
</head>

<body>
    <div class="container mx-auto flex flex-initial items-center">
        <img src="{{ asset('/assets/illustrations/landing-page/hero-image.png') }}" alt="hero-image"
            class="mt-10 sm:w-32 md:w-72 lg:w-96 xl:w-auto">
        <div class="py-8 px-10 text-gray-800">
            <h1 class="text-5xl font-bold font-display tracking-tight my-4">Remaster your knowledge.</h1>
            <p class="mt-2 font-normal pr-4">Repeat, create, and share quizzes with your peers in the name of
                knowledge and
                learning on any device.</p>
            <button type="button"
                class="text-white bg-blue-600 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 mt-6 w-auto">GET
                STARTED
            </button>
        </div>
    </div>
    <div class="container mx-auto text-center">
        <div class="font-bold font-display text-3xl my-8 text-gray-800">Features</div>
        <div class="flex flex-col">
            <div class="bg-slate-100 w-16"></div>
        </div>
    </div>
</body>

</html>
