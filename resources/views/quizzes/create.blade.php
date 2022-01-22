<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Quiz') }}
        </h2>
    </x-slot>

    {{-- BACK TO QUIZZES LIST --}}
    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- FORM FOR QUIZ CREATION --}}
    <div class="w-2/3  bg-orange-400 block">
        <form method="POST" action="{{ route('quizzes.store') }}">
            @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
            <label for="name">What's the Name of Your Quiz, Sir?</label> <br/>
            <input id="name" name="quiz[name]" type="text"> <br/>

            <label for="description">Provide a Description, Sir.</label> <br/>

            <input id="description" name="quiz[description]" type="text"> <br/>

            <label for="is_active">Is Your Quiz Active, Sir?</label> <br/>
            <input id="is_active" name="quiz[is_active]" type="checkbox"> <br/>

            <x-jet-button>
                <input type="submit" value="I'm Done Sire.">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
