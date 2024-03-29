<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizzes') }}
        </h2>
    </x-slot>
    <div class="py-8 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <p class="font-display font-bold text-3xl mb-2"> List of all your created
                    <span class="text-blue-600"> quizzes.</span>
                </p>
                <p class="text-sm">Manage all your quizzes here.</p>
            </div>

            {{-- QUIZZES LIST --}}
            <ul role="list" class="bg-white divide-y divide-slate-100 rounded-md shadow-sm">
                @foreach ($quizzes as $quiz)
                    <x-quiz-list-item :name="$quiz->name" :description="$quiz->description" :timesCompleted="$quiz->times_completed" :isActive="$quiz->is_active"
                        :id="$quiz->id" :questionsCount="$quiz->questions_count" />
                @endforeach
            </ul>
            {{-- CREATE QUIZ BUTTON --}}
            <div class="flex justify-end">
                <x-jet-button>
                    <a href="{{ route('quizzes.create') }}">
                        {{ __('CREATE QUIZ') }}
                    </a>
                </x-jet-button>
            </div>
        </div>
    </div>
</x-app-layout>
