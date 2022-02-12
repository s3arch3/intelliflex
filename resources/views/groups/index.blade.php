<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Groups') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- GROUPS LIST --}}
            <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                {{-- @foreach ($quizzes as $quiz)
                    <x-quiz-list-item :name="$quiz->name" :description="$quiz->description"
                        :timesCompleted="$quiz->times_completed" :isActive="$quiz->is_active" :id="$quiz->id"
                        :questionsCount="$quiz->questions_count" />
                @endforeach --}}
            </ul>
            {{-- CREATE QUIZ BUTTON --}}
            <x-jet-button>
                {{-- IF USER IS A PROFESSOR --}}
                <a href="{{ route('groups.create') }}">
                    {{ __('CREATE GROUP') }}
                </a>
            </x-jet-button>
        </div>
    </div>
</x-app-layout>
