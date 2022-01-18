<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizzes') }}
        </h2>
    </x-slot>

    {{-- CREATE QUIZ BUTTON --}}
    <x-jet-button>
        <a href="{{ route('quizzes.create') }}">
            {{ __('CREATE QUIZ') }}
        </a>
    </x-jet-button>

    {{-- QUIZZES LIST --}}
    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($quizzes as $quiz)
            <x-quiz-list-item :name="$quiz->name" :description="$quiz->description"
                :times_completed="$quiz->times_completed" :is_active="$quiz->is_active" :id="$quiz->id" />
        @endforeach
    </ul>
</x-app-layout>
