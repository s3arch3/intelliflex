<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/logo/intelliflex-favicon.png') }}">
    <title>Intelliflex</title>
    <link rel="stylesheet" href="">
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
        <div class="py-8 px-10 text-gray-900">
            <h1 class="text-5xl font-bold font-display leading-tight tracking-tight my-4">Remaster your knowledge.</h1>
            <p class="mt-2 font-normal pr-4">Repeat, create, and share quizzes with your peers in the name of
                knowledge and
                learning on any device.</p>
            <button type="button"
                class="text-white bg-blue-600 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 mt-6 w-auto">GET
                STARTED
            </button>
        </div>
    </div>
    <div class="container mx-auto my-8">
        {{-- Divider --}}
        {{-- <div class="flex py-5 items-center">
            <div class="flex-grow border-4 border-slate-200 rounded-full"></div>
            <span class="font-bold font-display text-3xl text-gray-900 my-4 mx-4 text-center">
                Features</span>
            <div class="flex-grow border-4 border-slate-200 rounded-full"></div>
        </div> --}}
        <div class=" font-bold font-display text-3xl text-gray-900 mb-2 mt-4 text-center">
            Features</div>
        <div class="mx-auto w-56 border-4 border-blue-600 rounded-lg"></div>
        {{-- 1st feature --}}
        <div class="flex flex-wrap gap-8 justify-center mt-10">
            <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
                <img src="{{ asset('/assets/illustrations/home/quiz-count.png') }}" alt="" class="w-14">
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2 hover:scale-105 transition ease-in-out duration-30">
                        Create your own
                        quizzes</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#"
                    class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                    Explore
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- 2nd feature --}}
            <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
                <img src="{{ asset('/assets/illustrations/home/badges.png') }}" alt="" class="w-14">
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2 hover:scale-105 transition ease-in-out duration-30">
                        Collect all goal
                        badges</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Accomplish various goals in order to obtain badges for every
                    quiz.</p>
                <a href="#"
                    class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                    Explore
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- 3rd feature --}}
            <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
                <img src="{{ asset('/assets/illustrations/home/friends.png') }}" alt="" class="w-14">
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2 hover:scale-105 transition ease-in-out duration-30">
                        Enjoy quizzes
                        with your friends and classmates.</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Share and enjoy your own created quizzes with your colleagues.
                </p>
                <a href="#"
                    class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                    Explore
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-wrap gap-8 justify-center mt-10">
            {{-- 4th feature --}}
            <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
                <img src="{{ asset('/assets/illustrations/home/progress.png') }}" alt="" class="w-14">
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2 hover:scale-105 transition ease-in-out duration-30">
                        Track your
                        progress</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Maintain a steady progress and improve your knowledge through
                    your own statistics.</p>
                <a href="#"
                    class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                    Explore
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- 5th feature --}}
            <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
                <img src="{{ asset('/assets/illustrations/home/groups.png') }}" alt="" class="w-14">
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2 hover:scale-105 transition ease-in-out duration-30">
                        Manage a class
                        using groups</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Use groups to manage a number of students and propagate
                    enjoyment of learning.</p>
                <a href="#"
                    class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                    Explore
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- 6th feature --}}
            <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
                <img src="{{ asset('/assets/illustrations/home/repeat.png') }}" alt="" class="w-14">
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2 hover:scale-105 transition ease-in-out duration-30">
                        Repeat, enjoy,
                        and master the quizzes all over again</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">The very soul of Intelliflex is to experience learning,
                    repeat, and master your own knowledge.</p>
                <a href="#"
                    class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                    Explore
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="flex flex-row gap-4 justify-between mt-10">
        {{-- 4th feature --}}
        <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
            <img src="{{ asset('/assets/illustrations/home/progress.png') }}" alt="" class="w-14">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">Track your
                    progress</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Maintain a steady progress and improve your knowledge through
                your own statistics.</p>
            <a href="#"
                class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                Explore
                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        {{-- 5th feature --}}
        <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
            <img src="{{ asset('/assets/illustrations/home/groups.png') }}" alt="" class="w-14">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">Manage a class
                    using groups</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Use groups to manage a number of students and propagate
                enjoyment of learning.</p>
            <a href="#"
                class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                Explore
                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        {{-- 6th feature --}}
        <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
            <img src="{{ asset('/assets/illustrations/home/repeat.png') }}" alt="" class="w-14">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">Repeat, enjoy,
                    and master the quizzes all over again</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">The very soul of Intelliflex is to experience learning,
                repeat, and master your own knowledge.</p>
            <a href="#"
                class="inline-flex items-center py-2 text-sm font-medium text-center  text-blue-600 hover:text-yellow-500 focus:ring-4 focus:ring-blue-300">
                Explore
                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
    {{-- For Students Section --}}
    <div class="container mx-auto flex flex-initial items-center bg-yellow-500 rounded-lg p-10 m-10">
        <div class="px-10 text-gray-900">
            <h1 class="text-5xl font-bold font-display leading-tight tracking-tight my-4 xl:text-5xl sm:text-3xl">
                For
                Students</h1>
            <p class="mt-2 font-normal pr-4 ">Have fun learning solo or together with other people, collect badges
                and
                repeat the experience of learning.</p>
            <button type="button"
                class="text-white bg-blue-600 hover:bg-white hover:text-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 mt-6 w-auto">GET
                STARTED
            </button>
        </div>
        <img src="{{ asset('/assets/illustrations/landing-page/students.png') }}" alt="hero-image"
            class=" sm:w-32 md:w-72 lg:w-96 xl:w-auto">
    </div>
    {{-- For Professors Section --}}
    <div class="container mx-auto flex flex-initial items-center bg-blue-600 rounded-lg p-10 m-10">
        <img src="{{ asset('/assets/illustrations/landing-page/professors.png') }}" alt="hero-image"
            class=" sm:w-32 md:w-72 lg:w-96 xl:w-auto">
        <div class="px-10 text-white">
            <h1 class="text-5xl font-bold font-display leading-tight tracking-tight my-4 xl:text-5xl sm:text-3xl">
                Professors</h1>
            <p class="mt-2 font-normal pr-4 ">Have fun learning solo or together with other people, collect badges
                and
                repeat the experience of learning.</p>
            <button type="button"
                class="text-white bg-yellow-500 hover:bg-white hover:text-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 mt-6 w-auto">GET
                STARTED
            </button>
        </div>
    </div>
    {{-- Testimonial cards --}}
    <div class="flex flex-row gap-4 justify-between mt-10 ">
        {{-- 1st Testimonial --}}
        <div
            class="max-w-sm rounded-lg bg-white shadow-md p-10 hover:scale-110 transition ease-in-out duration-30 hover:shadow-lg">
            {{-- Stars --}}
            <div class="flex flex-grow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
            </div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">
                Lovely experience...</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Totam quia asperiores necessitatibus molestias! Rerum illum debitis maiores suscipit, eveniet
                minus.</p>
            <div class="flex items-center">
                <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80"
                    alt="" class="mt-4 rounded-full w-12 ring ring-blue-200">
                <b class="mt-2 ml-4 text-sm text-gray-900">Lexie Alexander</b>
            </div>
        </div>
        {{-- Testimonial cards --}}
        <div class=" font-bold font-display text-3xl text-gray-900 text-center mb-6 mt-16">
            Let's hear it from others</div>
        <div class="mx-auto w-56 border-4 border-blue-600 rounded-lg mb-8"></div>
        <div class="flex  flex-wrap gap-4 justify-evenly mt-10">
            {{-- 1st Testimonial --}}
            <div
                class="max-w-sm rounded-lg bg-white shadow-md p-10 hover:scale-110 transition ease-in-out duration-30 hover:shadow-lg">
                {{-- Stars --}}
                <div class="flex  flex-grow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">
                    Lovely experience...</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Totam quia asperiores necessitatibus molestias! Rerum illum debitis maiores suscipit, eveniet
                    minus.</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80"
                        alt="" class="mt-4 rounded-full w-12 ring ring-blue-200">
                    <b class="mt-2 ml-4 text-sm text-gray-900">Lexie Alexander</b>
                </div>
            </div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">
                Dependable, Responsive, Professional Partner</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Totam quia asperiores necessitatibus molestias! Rerum illum debitis maiores suscipit, eveniet
                minus.</p>
            <div class="flex items-center">
                <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80"
                    alt="" class="mt-4 rounded-full w-12 ring ring-blue-200">
                <b class="mt-2 ml-4 text-sm text-gray-900">Lexie Alexander</b>
            </div>
            {{-- 3rd Testimonial --}}
            <div
                class="max-w-sm rounded-lg bg-white shadow-md p-10 hover:scale-110 transition ease-in-out duration-30 hover:shadow-lg">
                {{-- Stars --}}
                <div class="flex flex-grow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display">
                    Very intuitive.</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Totam quia asperiores necessitatibus molestias! Rerum illum debitis maiores suscipit, eveniet
                    minus.</p>
                <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80"
                        alt="" class="mt-4 rounded-full w-12 ring ring-blue-200">
                    <b class="mt-2 ml-4 text-sm text-gray-900">Lexie Alexander</b>
                </div>
            </div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">
                Very intuitive.</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Totam quia asperiores necessitatibus molestias! Rerum illum debitis maiores suscipit, eveniet
                minus.</p>
            <div class="flex items-center">
                <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80"
                    alt="" class="mt-4 rounded-full w-12 ring ring-blue-200">
                <b class="mt-2 ml-4 text-sm text-gray-900">Lexie Alexander</b>
            </div>
        </div>

    </div>
    <div class="text-center bg-yellow-500 p-10 mt-24">
        <p class="font-bold font-display text-4xl text-gray-900 text-center mb-4 mt-6">Ready to learn with us?</p>
        <button type="button"
            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 mt-6 w-auto">LET'S
            GET STARTED
        </button>
    </div>
</body>
<footer class="p-4 bg-blue-800 shadow md:px-6 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="#" class="flex items-center mb-4 sm:mb-0">
            <img src="{{ asset('/assets/illustrations/landing-page/logo-intelliflex-white.png') }}"
                class="h-16 mt-2" alt="">
        </a>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-200 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-200 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-200 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>
            <a href="#" class="text-gray-200 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-200 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
    <hr class="my-6 border-gray-100 sm:mx-auto lg:my-8" />
    <span class="block text-sm text-gray-200 sm:text-center">© 2022 <a href="https://flowbite.com"
            class="hover:underline">Intelliflex</a>. All Rights Reserved.
    </span>
</footer>

</html>
