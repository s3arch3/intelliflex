<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Details') }}
        </h2>
    </x-slot>
    <div class="container mt-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md">
        <form class="leading-relaxed text-center">
            <label>QUIZ ID: {{ $quizItem->id }}</label> <br>
            <label class="font-semibold">{{ $quizItem->name }}</label> <br>
            <label>{{ $quizItem->description }}</label> <br>
            <label
                class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm">
                @if ($quizItem->is_active === '1')
                    ACTIVE
                @else
                    INACTIVE
                @endif
            </label> <br>
        </form>
    </div>
    {{-- BACK TO QUIZZES LIST --}}
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-button>
                <a href=" {{ route('quizzes.index') }}">
                    GO BACK
                </a>
            </x-jet-button>
            {{-- QUIZ DESCRIPTION --}}
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($questions as $question)
                    {{-- {{ $question }} --}}
                    <x-question-list-item :index="$loop->index+1" :id="$question->id" :question="$question->question"
                        :explanation="$question->explanation" :isActive="$question->is_active"
                        :answers="$question->answers()->get()" />
                    <br>
                @endforeach
            </ul>
            {{-- CREATE QUESTION BUTTON --}}
            <x-jet-button>
                <a href="{{ route('questions.create', ['quizID' => $quizItem->id]) }}">
                    ADD QUESTION
                </a>
            </x-jet-button>
        </div>
    </div>
</x-app-layout>
