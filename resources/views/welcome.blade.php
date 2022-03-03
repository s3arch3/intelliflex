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
                <button type="button"
                    class="text-blue-600 bg-slate-100 hover:bg-blue-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-slate-100 dark:hover:bg-blue-100 dark:focus:ring-slate-300">LOGIN
                </button>
                <button type="button"
                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-200 ml-4 shadow-lg">REGISTER
                </button>
            </div>
    </nav>
</head>

<body>
    <div class="container mx-auto flex flex-wrap items-center">
        <img src="{{ asset('/assets/illustrations/landing-page/hero-image.png') }}" alt="hero-image"
            class="mt-10">
        <div class="flex flex-col items-center justify-between p-4">
            <h1 class="text-4xl font-bold font-display tracking-tight">Remaster your knowledge.</h1>
        </div>
    </div>
</body>

</html>
