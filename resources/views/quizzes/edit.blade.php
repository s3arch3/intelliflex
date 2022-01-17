<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Quiz') }}
        </h2>
    </x-slot>

    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- CREATE FORM --}}
    <div class="w-2/3  bg-orange-400 block">
        <form method="POST" action="{{ route('quizzes.update', $quizItem->id) }}">
            @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
            @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}
            <label for="quizName">Edit the quiz name, Sir?</label> <br/>
            <input id="quizName" name="quizName" type="text" value="{{ $quizItem->quiz_name }}"> <br/>

            <label for="quizDesc">Edit the Description, Sir?</label> <br/>
            <input id="quizDesc" name="quizDesc" type="text" value="{{ $quizItem->quiz_description }}"> <br/>

            <label for="isActive">Is Your Quiz Still Active, Sir?</label> <br/>
            <input id="isActive" name="isActive" type="checkbox" @if ($quizItem->is_active === 1) checked="checked" @endif> <br/>

            <x-jet-button>
                <input type="submit" value="Finish Editing">
            </x-jet-button>
        </form>
    </div>

</x-app-layout>
