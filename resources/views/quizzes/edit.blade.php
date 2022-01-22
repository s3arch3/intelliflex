<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Quiz') }}
        </h2>
    </x-slot>

    {{-- BACK TO QUIZZES LIST --}}
    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- FORM FOR QUIZ EDITION --}}
    <div class="w-2/3  bg-orange-400 block">
        <form method="POST" action="{{ route('quizzes.update', $quizItem->id) }}">
            @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
            @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}
            <label for="name">Edit the quiz name, Sir?</label> <br/>
            <input id="name" name="quiz[name]" type="text" value="{{ $quizItem->name }}"> <br/>

            <label for="description">Edit the Description, Sir?</label> <br/>
            <input id="description" name="quiz[description]" type="text" value="{{ $quizItem->description }}"> <br/>

            <label for="is_active">Is Your Quiz Still Active, Sir?</label> <br/>
            <input id="is_active" name="quiz[is_active]" type="checkbox" @if ($quizItem->is_active === '1') checked="checked" @endif> <br/>

            <x-jet-button>
                <input type="submit" value="Finish Editing">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
