<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Details') }}
        </h2>
    </x-slot>

    <x-jet-button>
        <a href="{{ route('quizzes.index') }}">
            GO BACK
        </a>
    </x-jet-button>

    {{-- CREATE FORM --}}
    <div class="w-2/3  bg-orange-400 block">
        <form>

            <label>QUIZ ID: {{ $quizItem->id }}</label> <br/>

            <label>QUIZ NAME: {{ $quizItem->quiz_name }}</label> <br/>

            <label>QUIZ DESC: {{ $quizItem->quiz_description }}</label> <br/>

            <label>ACTIVE: @if ($quizItem->is_active === 1) YES @else NO @endif</label> <br/>
        </form>
    </div>

</x-app-layout>
