<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Details') }}
        </h2>
    </x-slot>

    {{-- BACK TO QUIZZES LIST --}}
    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- CREATE QUESTION BUTTON --}}
    <x-jet-button>
        <a href="{{ route('questions.create') }}">
            ADD QUESTION
        </a>
    </x-jet-button>

    {{-- QUIZ DESCRIPTION --}}
    <div class="w-2/3  bg-orange-400 block">
        <form>
            <label>QUIZ ID: {{ $quizItem->id }}</label> <br/>
            <label>QUIZ NAME: {{ $quizItem->name }}</label> <br/>
            <label>QUIZ DESC: {{ $quizItem->description }}</label> <br/>
            <label>ACTIVE: @if ($quizItem->is_active === 1) YES @else NO @endif</label> <br/>
        </form>
    </div>

    {{-- LIST ALL QUESTIONS HERE --}}
    {{-- <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($quizzes as $quiz)
            <x-quiz-list-item :name="$quiz->name" :description="$quiz->description"
                :times_completed="$quiz->times_completed" :is_active="$quiz->is_active" :id="$quiz->id" />
        @endforeach
    </ul> --}}

</x-app-layout>
