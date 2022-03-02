<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                <div class="font-bold text-xl"> User Statistics
                </div>
                <br>
                <div class="flex text-center">
                    <div class="mb-2 rounded-md border border-gray-200 p-6">
                        <img src="{{ asset('assets/illustrations/home') }}" class="mx-auto w-10" alt="">
                        <p class="text-blue-800 text-md">Quiz Count</p>
                        <p class="text-4xl font-bold text-blue-800">{{ $quizCount }}</p>
                    </div>
                    <div class="mb-2">
                        <b>Overall Accuracy:</b>
                        {{ $overallAccuracy }} <br>
                    </div>
                    <div class="mb-2">
                        <b>Total Questions Answered:</b>
                        {{ $totalQuestionsAnswered }} <br>
                    </div>
                    <div class="mb-2">
                        <b class="mb-2">Total Points:</b>
                        {{ $totalPoints }} <br>
                    </div>
                    <div class="mb-2">
                        <b>Login Streak:</b>
                        {{ 'N/A' }} <br>
                    </div>
                </div>
                <br>
                <div class="font-bold text-lg mb-10">
                    <p>Chart about points earned in this week (Mon-Sun)</p>
                    <br>
                    <i>Chart Here</i>
                </div>
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
