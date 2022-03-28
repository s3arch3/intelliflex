<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <p class=" font-display font-medium text-3xl mb-2 "> Welcome back,
                    <span class="font-bold"> {{ $userName }}!</span>
                </p>
                <p class="text-sm">Here are your total performance metrics on this application.</p>
            </div>
            <div class="block p-4 bg-white rounded-md shadow-sm overflow-hidden border-gray-100">
                <br>
                <p class="font-semibold text-xl mb-4 sm:text-left lg:text-left md:text-left text-center">
                    Performance
                    Overview
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start text-center">
                    <div class="w-36 md:w-48 rounded-md bg-blue-50 p-6 text-cyan-600 m-2">
                        <img src="{{ asset('assets/illustrations/home/quiz-count.png') }}" class="mb-2 mx-auto w-10"
                            alt="">
                        <b class="text-sm mb-2">Quiz Count:</b>
                        <p class="text-2xl font-bold md:text-4xl">{{ $quizCount }}</p>
                    </div>
                    <div class="w-36 md:w-48 rounded-md bg-pink-50 p-6 text-pink-500 m-2">
                        <img src="{{ asset('assets/illustrations/home/accuracy.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-sm mb-2">Overall Accuracy:</b>
                        <p class="text-2xl font-bold md:text-4xl">{{ $overallAccuracy }}</p>
                    </div>
                    <div class="
                        w-36 md:w-48 rounded-md bg-indigo-50 p-6 text-indigo-600 m-2">
                        <img src="{{ asset('assets/illustrations/home/questions.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-sm mb-2">Total Questions Answered:</b>
                        <p class="text-2xl font-bold md:text-4xl">
                            {{ $totalQuestionsAnswered }}</p>
                    </div>
                    <div class="w-36 md:w-48 rounded-md bg-amber-50 p-6 text-amber-600 m-2">
                        <img src="{{ asset('assets/illustrations/home/points.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-sm mb-2">Total Points:</b>
                        <p class="text-2xl font-bold md:text-4xl"> {{ $totalPoints }}</p>
                    </div>
                    <div class="w-36 md:w-48 rounded-md bg-emerald-50 text-emerald-500 p-6 m-2">
                        <img src="{{ asset('assets/illustrations/home/login.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-sm mb-2">Login Streak:</b>
                        <p class="text-2xl font-bold md:text-4xl">{{ 'N/A' }}</p>
                    </div>
                </div>
            </div>
            <div class="block p-8 pt-4 mt-4 bg-white border border-gray-100 rounded-md shadow-sm overflow-hidden">
                {{-- <div class="font-bold text-lg mb-10">
                    <p>Chart about points earned in this week (Mon-Sun)</p>
                    <br>
                    <i>Chart Here</i>
                </div> --}}
                <div class="font-semibold text-xl mb-4 sm:text-left lg:text-left md:text-left text-center"> Quiz History
                </div>
                {{-- code for quiz logs list --}}
                @foreach ($quizLogs as $quizLog)
                    <x-quiz-log-item :id="
                    $quizLog->id" :name="$quizLog->quiz->name" :description="$quizLog->quiz->description"
                        :questionsCount="$quizLog->quiz->questions->count()" :isCompleted="$quizLog->completed"
                        :score="$quizLog->score" />
                @endforeach
            </div>
        </div>
</x-app-layout>
