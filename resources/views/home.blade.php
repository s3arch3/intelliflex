<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <p class=" font-display font-bold text-3xl mb-2"> Welcome back,
                    <span class="text-blue-600"> {{ $userName }}</span>!
                </p>
                <p>Here are your total performance metrics on this application.</p>
            </div>
            <div class=" block p-10 pt-4 bg-white rounded-md shadow-sm overflow-hidden">
                <br>
                <p class="font-bold text-xl mb-2">Performance Overview </p>
                <div class="flex flex-wrap justify-center text-center">
                    <div class="mb-2 rounded-md bg-slate-100 p-6 m-2">
                        <img src="{{ asset('assets/illustrations/home/quiz-count.png') }}" class="mb-2 mx-auto w-10"
                            alt="">
                        <b class="text-gray-800 text-sm mb-2">Quiz Count:</b>
                        <p class="text-4xl font-bold text-blue-600">{{ $quizCount }}</p>
                    </div>
                    <div class="mb-2 rounded-md bg-slate-100 p-6 m-2">
                        <img src="{{ asset('assets/illustrations/home/accuracy.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-gray-800 text-sm mb-2">Overall Accuracy:</b>
                        <p class="text-4xl font-bold text-blue-600">{{ $overallAccuracy }}</p>
                    </div>
                    <div class="mb-2 rounded-md bg-slate-100 p-6 m-2">
                        <img src="{{ asset('assets/illustrations/home/questions.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-gray-800 text-sm mb-2">Total Questions Answered:</b>
                        <p class="text-4xl font-bold text-blue-600">
                            {{ $totalQuestionsAnswered }}</p>
                    </div>
                    <div class="mb-2 rounded-md bg-slate-100 p-6 m-2">
                        <img src="{{ asset('assets/illustrations/home/points.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-gray-800 text-sm mb-2">Total Points:</b>
                        <p class="text-4xl font-bold text-blue-600"> {{ $totalPoints }}</p>
                    </div>
                    <div class="mb-2 rounded-md bg-slate-100 p-6 m-2">
                        <img src="{{ asset('assets/illustrations/home/login.png') }}" class="mb-2 mx-auto w-10">
                        <b class="text-gray-800 text-sm mb-2">Login Streak:</b>
                        <p class="text-3xl font-bold text-blue-600">{{ 'N/A' }}</p>
                    </div>
                </div>
                <br>
                {{-- <div class="font-bold text-lg mb-10">
                    <p>Chart about points earned in this week (Mon-Sun)</p>
                    <br>
                    <i>Chart Here</i>
                </div> --}}
                <div class="font-semibold text-lg mb-4"> Quiz History</div>
                {{-- code for quiz logs list --}}
                @foreach ($quizLogs as $quizLog)
                    <x-quiz-log-item :id="
                    $quizLog->id" :name="$quizLog->quiz->name" :description="$quizLog->quiz->description"
                        :questionsCount="$quizLog->quiz->questions->count()" :isCompleted="$quizLog->completed"
                        :score="$quizLog->score" />
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
