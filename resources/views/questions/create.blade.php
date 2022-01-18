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
        <form method="POST" action="{{ route('questions.store') }}">
            @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
            <label for="questionName">Question Name, Sir?</label> <br />
            <input id="questionName" name="questionName" type="text"> <br />

            <label for="questionExp">Explanation of the Question, Sir. Will be used as a secret tool (hint) later.
                ;)</label> <br />
            <input id="questionExp" name="questionExp" type="text"> <br />

            <br />
            <input id="isActive" name="isActive" type="checkbox">
            <label for="isActive">Is Your Question Active, Sir?</label> <br />

            <br />
            {{-- CHOCIES --}}
            A
            <input type="radio" id="answerA" name="selectedAnswer" value="A">
            <input id="answerA" name="answerA" type="text"> <br/>

            B
            <input type="radio" id="answerB" name="selectedAnswer" value="B">
            <input id="answerB" name="answerB" type="text"> <br/>

            C
            <input type="radio" id="answerC" name="selectedAnswer" value="C">
            <input id="answerC" name="answerC" type="text"> <br/>

            D
            <input type="radio" id="answerD" name="selectedAnswer" value="D">
            <input id="answerD" name="answerD" type="text"> <br/>

            <br/><br/>
            <x-jet-button>
                <input type="submit" value="Question Making I'm Done Sire.">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
