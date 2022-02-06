<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizzes') }}
        </h2>
    </x-slot>

    {{-- CREATE QUIZ BUTTON --}}
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- QUIZZES LIST --}}
            <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100">
                @foreach ($quizzes as $quiz)
                    <x-quiz-list-item :name="$quiz->name" :description="$quiz->description"
                        :timesCompleted="$quiz->times_completed" :isActive="$quiz->is_active" :id="$quiz->id"
                        :questionsCount="$quiz->questions_count" />
                @endforeach
            </ul>
            <x-jet-button class="container mx-auto">
                <a href="{{ route('quizzes.create') }}">
                    {{ __('CREATE QUIZ') }}
                </a>
            </x-jet-button>
        </div>
    </div>
</x-app-layout>
