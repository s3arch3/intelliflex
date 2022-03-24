{{-- THIS PAGE IS TO SHOW QUIZ DETAILS --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Questions') }}
        </h2>
    </x-slot>

    {{-- QUIZ DETAIL ITEM --}}
    <x-quiz-detail-item :quizName="$quizItem->name" :quizDescription="$quizItem->description"
        :isActive="$quizItem->is_active" />

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
