<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Question') }}
        </h2>
    </x-slot>

    {{-- BACK TO THAT QUIZ ITEM DETAILS --}}
    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- CREATE QUESTION FORM --}}
    <div class="w-2/3  bg-orange-400 block">
        <form method="POST" action="{{ route('questions.store', ['quizID' => $quizID]) }}">
            @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
            <label for="quizID">Creating question for Quiz ID: {{ $quizID }}</label> <br />


            <label for="question">Question Name, Sir?</label> <br />
            <input id="question" name="question" type="text"> <br />

            <label for="explanation">Explanation of the Question, Sir. Will be used as a secret tool (hint) later.
                ;)</label> <br />
            <input id="explanation" name="explanation" type="text"> <br />

            <br />
            <input id="isActive" name="isActive" type="checkbox">
            <label for="isActive">Is Your Question Active, Sir?</label> <br />

            <br />
            {{-- CHOCIES --}}
            A
            <input type="radio" id="answerA" name="selectedAnswer" value="letterA">
            <input id="answerA" name="answerA" type="text" placeholder="answer for letter A">
            <input id="explanationA" name="explanationA" type="text" placeholder="explanation for letter A"> <br/>

            B
            <input type="radio" id="answerB" name="selectedAnswer" value="letterB">
            <input id="answerB" name="answerB" type="text" placeholder="answer for letter B">
            <input id="explanationB" name="explanationB" type="text" placeholder="explanation for letter B"> <br/>

            C
            <input type="radio" id="answerC" name="selectedAnswer" value="letterC">
            <input id="answerC" name="answerC" type="text" placeholder="answer for letter C">
            <input id="explanationC" name="explanationC" type="text" placeholder="explanation for letter C"> <br/>

            D
            <input type="radio" id="answerD" name="selectedAnswer" value="letterD">
            <input id="answerD" name="answerD" type="text" placeholder="answer for letter D">
            <input id="explanationD" name="explanationD" type="text" placeholder="explanation for letter D"> <br/>

            <br/><br/>
            <x-jet-button>
                <input type="submit" value="Question Making I'm Done Sire.">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
