{{-- THIS PAGE IS TO SHOW QUIZ DETAILS --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Questions') }}
        </h2>
    </x-slot>
    <div class="container mt-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
        {{-- QUIZ ID --}}
        {{-- <label>QUIZ ID: {{ $quizItem->id }}</label>
        <br> --}}

        {{-- QUIZ NAME --}}
        <label class="font-display font-bold text-3xl mb-2">{{ $quizItem->name }}</label>
        <br>

        {{-- QUIZ DESCRIPTION --}}
        <label>{{ $quizItem->description }}</label>
        <br>

        {{-- ACTIVE/INACTIVE INDICATOR --}}
        @if ($quizItem->is_active === '1')
            <span class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2 mx-2">
                Active
            </span>
        @elseif ($quizItem->is_active === '0')
            <span class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2 mx-2">
                Inactive
            </span>
        @endif
        <br>
    </div>

    {{-- CONTAINER FOR ALL QUESTIONS --}}
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- BACK TO QUIZZES LIST --}}
            <x-jet-button>
                <a href=" {{ route('quizzes.index') }}">
                    GO BACK
                </a>
            </x-jet-button>

            {{-- LIST OF ALL QUESTIONS --}}
            <ul role="list" class="divide-gray-200 dark:divide-gray-700">
                {{-- THIS CODE LISTS ALL QUESTIONS BY CALLING x-question-list-item FOR EACH QUESTION --}}
                @foreach ($questions as $question)
                    <x-question-list-item :index="$loop->index+1" :id="$question->id" :question="$question->question"
                        :explanation="$question->explanation" :isActive="$question->is_active"
                        :answers="$question->answers()->get()" />
                    <br>
                @endforeach
            </ul>

            {{-- ADD QUESTION BUTTON --}}
            <x-jet-button>
                <a href="{{ route('questions.create', ['quizID' => $quizItem->id]) }}">
                    ADD QUESTION
                </a>
            </x-jet-button>
        </div>
    </div>
</x-app-layout>
