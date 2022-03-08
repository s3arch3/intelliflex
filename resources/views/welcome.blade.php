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
                <button type="button"
                    class="text-blue-600 bg-slate-100 hover:bg-blue-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-3 md:mr-0 dark:bg-slate-100 dark:hover:bg-blue-100 dark:focus:ring-slate-300">LOGIN
                </button>
                <button type="button"
                    class="text-white bg-blue-600 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-3 md:mr-0 shadow-lg shadow-blue-600/40 hover:shadow-yellow-600/40">REGISTER
                </button>
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
        <div class="mx-auto w-56 border-4 border-slate-300 rounded-lg"></div>
        <div class=" font-bold font-display text-3xl text-gray-900 my-4 text-center">
            Features</div>
        {{-- 1st feature --}}
        <div class="flex flex-row gap-4 justify-between mt-10">
            <div class="justify-start p-6 max-w-sm rounded-lg bg-slate-50">
                <img src="{{ asset('/assets/illustrations/home/quiz-count.png') }}" alt="" class="w-14">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">Create your own
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">Collect all goal
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 font-display mt-2">Enjoy quizzes
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
            {{-- 2nd Testimonial --}}
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
            </a>
        </div>
    </div>
</body>

</html>
