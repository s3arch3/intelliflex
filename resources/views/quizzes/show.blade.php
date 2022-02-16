<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Details') }}
        </h2>
    </x-slot>
    <div class="block px-24 py-4 bg-yellow-400 rounded-md shadow-sm mx-auto">
        <form class="text-md leading-relaxed font-semibold text-gray-00">
            <label>QUIZ ID: {{ $quizItem->id }}</label> <br>
            <label>QUIZ NAME: {{ $quizItem->name }}</label> <br>
            <label>QUIZ DESC: {{ $quizItem->description }}</label> <br>
            <label>ACTIVE: @if ($quizItem->is_active === "1") YES @else NO @endif</label> <br>
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
