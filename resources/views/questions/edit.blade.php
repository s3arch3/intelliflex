<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Question') }}
        </h2>
    </x-slot>

    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- EDIT QUESTION FORM --}}
    <div class="w-2/3  bg-orange-400 block">
        <form method="POST" action="{{ route('questions.update', $questionItem->id) }}">
            @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
            @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}

            <label for="quizID">Editing question for Quiz ID: {{ $questionItem->quiz_id }}</label> <br>


            <label for="question">Question Name, Sir?</label> <br>
            <input id="question" name="question[question]" type="text" value="{{ $questionItem->question }}"> <br>

            <label for="explanation">Explanation of the Question, Sir. Will be used as a secret tool (hint) later.
                ;)</label> <br>
            <input id="explanation" name="question[explanation]" type="text" value="{{ $questionItem->explanation }}"> <br>

            <br>
            <input id="is_active" name="question[is_active]" type="checkbox" @if ($questionItem->is_active === '1') checked="checked" @endif>
            <label for="is_active">Is Your Question Active, Sir?</label> <br>

            <br>
            {{-- CHOCIES --}}
            A
            <input type="radio" id="answerA" name="question[is_selected]" value="A" checked="{{ $questionItem->is_checked }}">
            <input id="answerA" name="answers[0][answer]" type="text" placeholder="answer for letter A" value="{{ $answers[0]['answer'] }}">
            <input id="explanationA" name="answers[0][explanation]" type="text" placeholder="explanation for letter A" value="{{ $answers[0]['explanation'] }}"> <br/>

            B
            <input type="radio" id="answerB" name="question[is_selected]" value="B" checked="{{ $questionItem->is_checked }}">
            <input id="answerB" name="answers[1][answer]" type="text" placeholder="answer for letter B" value="{{ $answers[1]['answer'] }}">
            <input id="explanationB" name="answers[1][explanation]" type="text" placeholder="explanation for letter B" value="{{ $answers[1]['explanation'] }}"> <br/>

            C
            <input type="radio" id="answerC" name="question[is_selected]" value="C" checked="{{ $questionItem->is_checked }}">
            <input id="answerC" name="answers[2][answer]" type="text" placeholder="answer for letter C" value="{{ $answers[2]['answer'] }}">
            <input id="explanationC" name="answers[2][explanation]" type="text" placeholder="explanation for letter C" value="{{ $answers[2]['explanation'] }}"> <br/>

            D
            <input type="radio" id="answerD" name="question[is_selected]" value="D" checked="{{ $questionItem->is_checked }}">
            <input id="answerD" name="answers[3][answer]" type="text" placeholder="answer for letter D" value="{{ $answers[3]['answer'] }}">
            <input id="explanationD" name="answers[3][explanation]" type="text" placeholder="explanation for letter D" value="{{ $answers[3]['explanation'] }}"> <br/>

            <br/><br/>
            <x-jet-button>
                <input type="submit" value="Question Editoinks I'm Done Sire.">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
