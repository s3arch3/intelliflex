<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />


                Quiz History
                {{-- code for quiz logs list --}}
                @foreach ($quizLogs as $quizLog)
                    <x-quiz-log-item
                    :id="$quizLog->id"
                    :name="$quizLog->quiz->name"
                    :description="$quizLog->quiz->description"
                    :questionsCount="$quizLog->quiz->questions->count()"
                    :isCompleted="$quizLog->completed"
                    :score="$quizLog->score"/>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
