<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Details') }}
        </h2>
    </x-slot>
    <div class="py-4">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
        <div class="container mt-4 mx-auto block ">
            <div class=" px-4 py-4 bg-white shadow-md rounded-md">
                <div class="leading-relaxed text-center">
                    <form>
                        <label class="font-medium">QUIZ ID: {{ $quizLogID }}</label> <br>
                        <label class="font-semibold">{{ $quizLog->quiz->name }}</label> <br>
                        <div class="flex justify-center items-center mt-2"><img
                                src="{{ asset('assets/illustrations/home/progress.png') }}" class="w-7 mr-2"
                                alt="">
                            <span>
                                <p class="font-medium text-sm">Completed: {{ $quizLog->completed }}
                                </p>
                            </span>
                        </div>
                        <div class="flex justify-center items-center"><img
                                src="{{ asset('assets/illustrations/home/questions.png') }}" class="w-7 mr-2"
                                alt="">
                            <span>
                                <p class="font-medium text-sm">Total Questions: {{ $quizLog->number_of_questions }}
                                </p>
                            </span>
                        </div>
                        <div class="flex justify-center items-center"><img
                                src="{{ asset('assets/illustrations/home/points.png') }}" class="w-7 mr-2"
                                alt="">
                            <span>
                                <p class="font-medium text-sm">Score: {{ $quizLog->score }}
                                </p>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <p class="mt-8 mb-4 font-semibold font-display text-xl"> Questions:</p>
            <div class="container mt-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md">

                {{-- loop thru all questions on that quiz --}}
                <div class="text-gray-800 text-sm px-4 py-4 ">
                    @foreach ($quizQuestions as $quizQuestion)
                        @php
                            $questionIndex = $loop->index; // to be able to loop from 0 to array length of total questions are there
                        @endphp
                        {{-- numbering for each question --}}

                        <label class="font-semibold"> Question #{{ $questionIndex + 1 }}
                            {{-- the actual question --}}
                            {{ $quizQuestion->question }} </label>
                        {{-- loop thru available answers of that particular question --}}
                        @foreach ($quizQuestion->answers as $answer)
                            <br>
                            <div class="mt-3 indent-10">
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
                                    <u
                                        class="border border-green-400 bg-green-200 font-semibold text-green-900 p-2 my-2 no-underline">{{ $answer->answer }}</u>
                                    {{-- when the user answered wrong based on log and the answer itself is incorrect --}}
                                @elseif ($quizLogItems[$questionIndex]->answer_id === $answer->id && $answer->is_checked === '0')
                                    <u
                                        class="border border-red-400 bg-red-200 font-semibold p-2 my-2 text-red-900 no-underline">{{ $answer->answer }}</u>
                                    {{-- when the user did not answered this but this is the correct answer --}}
                                @elseif ($quizLogItems[$questionIndex]->is_correct === '0' && $answer->is_checked === '1')
                                    <u>{{ $answer->answer }}</u>
                                    {{-- else, just keep the answer unstyled/plain --}}
                                @else
                                    <u class="text-md no-underline">{{ $answer->answer }}</u>
                                @endif
                        @endforeach
                        <br>
                        <br>
                    @endforeach

                </div>
            </div>
</x-app-layout>
