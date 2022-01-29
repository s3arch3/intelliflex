<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Details') }}
        </h2>
    </x-slot>

    Display Quiz Log HERE

    ID: {{ $quizLogID }}
    <br>
    Quiz Title {{ $quizLog->quiz->name }}
    <br>
    Completed {{ $quizLog->completed }}
    <br>
    Total Questions {{ $quizQuestions->count() }}
    <br>
    Score {{ $quizLog->score }}
    <br>

    Questions:
    <br>

    {{-- loop thru all questions on that quiz --}}
    @foreach ($quizQuestions as $quizQuestion)

        {{-- numbering for each question --}}
        {{ $loop->index + 1 }}
        {{-- the actual question --}}
        <b> {{ $quizQuestion->question }} </b>

        {{-- loop thru available answers of that particular question --}}
        @foreach ($quizQuestion->answers as $answer)
            <br>
            {{-- switch case for each answer on the list if 1=A, 2=B, 3=C, 4=D --}}
            @switch($loop->index + 1)
                @case(1) A.@break
                @case(2) B.@break
                @case(3) C.@break
                @case(4) D.@break
                @default
            @endswitch
            {{-- the actual answer --}}
            @if ()
               {{ $answer->answer }}

            @endif
        @endforeach
        <br>
        <br>
    @endforeach



</x-app-layout>
