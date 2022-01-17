<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Quiz') }}
        </h2>
    </x-slot>

    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- CREATE FORM --}}
    <div class="w-2/3  bg-orange-400 block">
        <form method="POST" action="{{ route('quizzes.store') }}">
            @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
            <label for="quizName">What's the Name of Your Quiz, Sir?</label> <br/>
            <input id="quizName" name="quizName" type="text"> <br/>

            <label for="quizDesc">Provide a Description, Sir.</label> <br/>
            <input id="quizDesc" name="quizDesc" type="text"> <br/>

            <label for="isActive">Is Your Quiz Active, Sir?</label> <br/>
            <input id="isActive" name="isActive" type="checkbox"> <br/>

            <x-jet-button>
                <input type="submit" value="I'm Done Sire.">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
