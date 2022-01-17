<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizzes') }}
        </h2>
    </x-slot>
    Welcome to quizzes section.

    {{-- CREATE QUIZ --}}
    <x-jet-button>
        <a href="{{ route('quizzes.create') }}">
            {{ __('CREATE QUIZ') }}
        </a>
    </x-jet-button>

    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($quizzes as $quiz)
            <x-quiz-list-item :quiz_name="$quiz->quiz_name" :quiz_description="$quiz->quiz_description"
                :times_completed="$quiz->times_completed" :is_active="$quiz->is_active" :id="$quiz->id" />
        @endforeach
    </ul>
</x-app-layout>
