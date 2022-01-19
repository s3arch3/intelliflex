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
        <a href="{{ route('questions.create', ['quizID' => $quizItem->id]) }}">
            ADD QUESTION
        </a>
    </x-jet-button>

    {{-- QUIZ DESCRIPTION --}}
    <div class="w-2/3  bg-orange-400 block">
        <form>
            <label>QUIZ ID: {{ $quizItem->id }}</label> <br />
            <label>QUIZ NAME: {{ $quizItem->name }}</label> <br />
            <label>QUIZ DESC: {{ $quizItem->description }}</label> <br />
            <label>ACTIVE: @if ($quizItem->is_active === 1) YES @else NO @endif</label> <br />
        </form>
    </div>

    QUESTIONS UNDER THIS QUIZ
    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($questions as $question)
            <x-question-list-item :questionNumber="$loop->index+1" :userID=null :quizID=null
                :isActive="$question->is_active" :question="$question->question"
                :explanationQuestion="$question->explanation" :answerA=null :answerB=null :answerC=null
                :answerD=null :explanationAnswerA=null :explanationAnswerB=null
                :explanationAnswerC=null :explanationAnswerD=null
                :isCheckedA=null :isCheckedB=null :isCheckedC=null :isCheckedD=null />
        @endforeach
    </ul>

</x-app-layout>
