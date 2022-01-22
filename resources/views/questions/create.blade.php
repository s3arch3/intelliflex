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
            <label for="quizID">Creating question for Quiz ID: {{ $quizID }}</label> <br>


            <label for="question">Question Name, Sir?</label> <br>
            <input id="question" name="question[question]" type="text"> <br>

            <label for="explanation">Explanation of the Question, Sir. Will be used as a secret tool (hint) later.
                ;)</label> <br>
            <input id="explanation" name="question[explanation]" type="text"> <br>

            <br>
            <input id="is_active" name="question[is_active]" type="checkbox" checked="checked">
            <label for="is_active">Is Your Question Active, Sir?</label> <br>

            <br>
            {{-- CHOCIES --}}
            A
            <input type="radio" id="answerA" name="question[is_selected]" value="A">
            <input id="answerA" name="answers[0][answer]" type="text" placeholder="answer for letter A">
            <input id="explanationA" name="answers[0][explanation]" type="text" placeholder="explanation for letter A"> <br/>

            B
            <input type="radio" id="answerB" name="question[is_selected]" value="B">
            <input id="answerB" name="answers[1][answer]" type="text" placeholder="answer for letter B">
            <input id="explanationB" name="answers[1][explanation]" type="text" placeholder="explanation for letter B"> <br/>

            C
            <input type="radio" id="answerC" name="question[is_selected]" value="C">
            <input id="answerC" name="answers[2][answer]" type="text" placeholder="answer for letter C">
            <input id="explanationC" name="answers[2][explanation]" type="text" placeholder="explanation for letter C"> <br/>

            D
            <input type="radio" id="answerD" name="question[is_selected]" value="D">
            <input id="answerD" name="answers[3][answer]" type="text" placeholder="answer for letter D">
            <input id="explanationD" name="answers[3][explanation]" type="text" placeholder="explanation for letter D"> <br/>

            <br/><br/>
            <x-jet-button>
                <input type="submit" value="Question Making I'm Done Sire.">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
