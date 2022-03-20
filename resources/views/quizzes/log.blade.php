<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}

        <div class="block px-24 py-4 bg-yellow-400 rounded-md shadow-sm mx-auto">
            <form class="text-md leading-relaxed font-semibold text-gray-00">
                <label>ID: {{ $quizLogID }}</label> <br>
                <label>Quiz Title {{ $quizLog->quiz->name }}</label> <br>
                <label>Completed {{ $quizLog->completed }}</label> <br>
                <label>Total Questions {{ $quizLog->number_of_questions }}</label> <br>
                <label>Score {{ $quizLog->score }}</label> <br>
            </form>
        </div>
        <br>
        Questions:
        <br>

        {{-- loop thru all questions on that quiz --}}
        <div class=" divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($quizQuestions as $quizQuestion)
                @php
                    $questionIndex = $loop->index; // to be able to loop from 0 to array length of total questions are there
                @endphp
                {{-- numbering for each question --}}
                {{ $questionIndex + 1 }}
                {{-- the actual question --}}
                <b> {{ $quizQuestion->question }} </b>

                {{-- loop thru available answers of that particular question --}}
                @foreach ($quizQuestion->answers as $answer)
                    <br>
                    {{-- switch case for each answer on the list if 1=A, 2=B, 3=C, 4=D --}}
                    @switch($loop->index + 1)
                        @case(1)
                            A.
                        @break

                        @case(2)
                            B.
                        @break

                        @case(3)
                            C.
                        @break

                        @case(4)
                            D.
                        @break

                        @default
                    @endswitch
                    {{-- when the user answered correctly based on log and the answer itself is correct --}}
                    @if ($quizLogItems[$questionIndex]->is_correct === '1' && $answer->is_checked === '1')
                        <u>{{ $answer->answer }}</u>
                        (user answered this and this is the correct answer)
                        {{-- when the user answered wrong based on log and the answer itself is incorrect --}}
                    @elseif ($quizLogItems[$questionIndex]->answer_id === $answer->id && $answer->is_checked === '0')
                        <u>{{ $answer->answer }}</u>
                        (user answered this but this is the wrong answer)
                        {{-- when the user did not answered this but this is the correct answer --}}
                    @elseif ($quizLogItems[$questionIndex]->is_correct === '0' && $answer->is_checked === '1')
                        <u>{{ $answer->answer }}</u>
                        (user didn't answered this but this is the correct answer)
                        {{-- else, just keep the answer unstyled/plain --}}
                    @else
                        <u>{{ $answer->answer }}</u>
                        (not involved)
                    @endif
                @endforeach
                <br>
                <br>
            @endforeach
        </div>
</x-app-layout>
