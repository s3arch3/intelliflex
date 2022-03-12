<div>
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    @if ($quizInStart)
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-jet-button>
                    {{-- back button --}}
                    <a href="{{ route('quizzes.index') }}">
                        GO BACK
                    </a>
                </x-jet-button>
            </div>
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <br>
                <div class="block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                    <div class="flex flex-col items-center">
                        <div class="flex items-center">
                            <div class="w-16 h-16 rounded-full p-4
                        shadow-md bg-gray-200">
                            </div>
                            <p class="font-display ml-4 text-3xl font-bold text-blue-600">{{ $quizItem->name }}</p>
                        </div>
                        <p class="mb-2">Quiz Livewire Start ID: {{ $quizID }}</p>
                        <p class="ml-4 text-sm font-regular text-gray-700 mb-2">{{ $quizItem->description }}
                        </p>
                        <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2">Times
                            completed: {{ $quizItem->times_completed }}</p>
                        <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2">Questions:
                            {{ $questionsCount }}</p>
                        @if ($groupProfessorID != 0)
                            <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2"> Group Professor ID:
                                {{ $groupProfessorID }}</p>
                            <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2"> Group Quiz ID:
                                {{ $groupQuizID }}</p>
                        @endif
                        <form wire:submit.prevent="startQuiz">
                            @csrf
                            <x-jet-button class="font-semibold">
                                <input type="submit" value="START QUIZ">
                            </x-jet-button>
                        </form>
                    </div>
                    {{-- <div class="mx-auto text-lg text-gray-800">
                        <div class="mb-2">
                            <b>Quiz Livewire Start</b>
                            ID: {{ $quizID }}
                        </div>
                        <div class="mb-2">
                            <b>Quiz Title</b> {{ $quizItem->name }}
                        </div>
                        <div class="mb-2">
                            <b>Description</b> {{ $quizItem->description }}
                        </div>
                        <div class="mb-2">
                            <b>Times Completed</b> {{ $quizItem->times_completed }}
                        </div>
                        <div class="mb-2">
                            <b>Questions</b> {{ $questionsCount }}
                        </div>
                    </div> --}}
                    {{-- <x-jet-button>
                        <a href="">
                            START QUIZ
                        </a>
                    </x-jet-button> --}}
                </div>
            </div>
        </div>
    @endif
    {{-- QUIZ PROGRESS FRAME --}}
    {{-- QUIZ PROGRESS FRAME --}}
    {{-- QUIZ PROGRESS FRAME --}}
    @if ($quizInProgress)
        <div class="py-6">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                    <div class="flex flex-col items-center">
                        <div class="mb-2 font-display text-2xl text-blue-600">
                            <b>Question # {{ $count }}</b>
                        </div>
                        <div class="mb-6 font-display text-4xl text-gray-800">
                            <b>{{ $currentQuestion->question }}</b>
                        </div>
                        {{-- IMPORTANT --}}
                        {{-- IMPORTANT --}}
                        {{-- IMPORTANT --}}
                        {{-- IMPORTANT --}}
                        {{-- IMPORTANT --}}
                        {{-- all radiobuttons must be enclosed in <div> wrapper because they should all have a root component --}}
                        {{-- https://stackoverflow.com/questions/60395647/laravel-livewire-component-not-refreshing-reloading-automatically-after-refreshi --}}
                        <div class="text-sm font-semibold mb-2 text-gray-800">
                            {{-- list all the choices here --}}
                            @foreach ($currentQuestion->answers as $answer)
                                {{-- value property ex. 3,1 (answer_id, is_checked) 3 is the answer id and 1 is checked (0 is not) --}}
                                <input
                                    class="mb-2 w-4 h-4 bg-gray-50 rounded-full border border-gray-300 focus:ring-3 focus:ring-blue-300 "
                                    type="radio" id="answer" name="selectedAnswer" wire:model="userAnswered"
                                    value="{{ $answer->id . ',' . $answer->is_checked }}">
                                {{ $answer->answer }}
                                <br>
                                <br>
                            @endforeach
                        </div>
                        {{-- "Next Question" or "Show Results" --}}
                        <form wire:submit.prevent="nextQuestion">
                            @csrf
                            @if ($count < $questionsCount)
                                <x-jet-button class="font-bold">
                                    <input type="submit" value="NEXT QUESTION">
                                </x-jet-button>
                            @else
                                <x-jet-button class="font-bold">
                                    <input type="submit" value="SHOW RESULTS">
                                </x-jet-button>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
    @endif
    {{-- QUIZ END FRAME --}}
    {{-- QUIZ END FRAME --}}
    {{-- QUIZ END FRAME --}}
    @if ($quizInEnd)
        {{-- wire:poll.500ms --}}
        <div class="py-6">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                    <div class="flex flex-col items-center text-center ">
                        {{-- IMPORTANT --}}
                        {{-- IMPORTANT --}}
                        {{-- IMPORTANT --}}
                        {{-- enclose livewire stuff in a div --}}
                        <img src="{{ asset('assets/illustrations/confetti.png') }}" class="w-10 h-10 mb-4" alt="">
                        <p class="font-display font-semibold text-4xl text-gray-800">Congratulations, you
                            completed the</p>
                        {{-- ID: {{ $quizID }} --}}
                        <div class="mb-6 font-display text-4xl inline-flex">
                            <p class="font-bold text-blue-600">{{ $quizItem->name }} </p>
                            <p class="ml-2 font-semibold text-gray-800">quiz!
                        </div>
                        {{-- <div class="mb-2">
                            <b>Description</b> {{ $quizItem->description }}
                        </div> --}}
                        <div class="mb-2 text-gray-800">
                            <p class="mb-2 text-lg font-semibold">Your score is</p>
                            <p class="
                               mb-4 text-4xl font-bold">
                                {{ $correctAnswers }} out of
                                {{ $questionsCount }}

                        </div>
                        <div class="text-lg inline-flex">
                            <p class="font-semibold text-gray-800">You completed this quiz
                            <p class="ml-2 font-bold text-blue-600">{{ $quizItem->times_completed }} times
                        </div>
                        <div class="mb-2">
                            <b>Questions</b> {{ $questionsCount }}
                        </div>

                        <div class="mb-2">
                            <b>Percentage</b> {{ $quizPercentage }}
                        </div>
                    </div>
                </div>
                {{-- no submit.prevent to produce default action which is refreshing and going to details page --}}
                <x-jet-button>
                    <a href="{{ route('log', $quizLog->id) }}">
                        Full Details
                    </a>
                </x-jet-button>

                {{-- BACK TO HOME --}}
                <x-jet-button class="ml-2">
                    <a href="{{ route('home') }}">
                        Return to Home
                    </a>
                </x-jet-button>

                <form wire:submit.prevent="startQuiz">
                    @csrf
                    <x-jet-button class="font-semibold">
                        <input type="submit" value="TAKE QUIZ AGAIN">
                    </x-jet-button>
                </form>
            </div>
        </div>
</div>
@endif
</div>
