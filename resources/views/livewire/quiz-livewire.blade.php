<div>
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    @if ($quizInStart)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                    {{-- back button --}}
                    <x-jet-button>
                        <a href="{{ route('quizzes.index') }}">
                            GO BACK
                        </a>
                    </x-jet-button>

                    <br>
                    <div class="mx-auto text-lg text-gray-800">
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
                    </div>
                    {{-- <x-jet-button>
                        <a href="">
                            START QUIZ
                        </a>
                    </x-jet-button> --}}

                    <form wire:submit.prevent="startQuiz">
                        @csrf
                        <x-jet-button class="font-semibold">
                            <input type="submit" value="START QUIZ">
                        </x-jet-button>
                    </form>

                </div>
            </div>
        </div>
    @endif
    {{-- QUIZ PROGRESS FRAME --}}
    {{-- QUIZ PROGRESS FRAME --}}
    {{-- QUIZ PROGRESS FRAME --}}
    @if ($quizInProgress)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                    <div>
                        <div class="mb-2">
                            IN PROGRESS
                        </div>
                        <div class="mb-2">
                            <b>Quiz Progress</b>
                        </div>
                        <div class="mb-2">
                            <b>Question Number</b> {{ $count }}
                        </div>
                        <div class="mb-2">
                            <b>Question</b> {{ $currentQuestion->question }}
                        </div>
                    </div>

                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- all radiobuttons must be enclosed in <div> wrapper because they should all have a root component --}}
                    {{-- https://stackoverflow.com/questions/60395647/laravel-livewire-component-not-refreshing-reloading-automatically-after-refreshi --}}
                    <div>
                        {{-- list all the choices here --}}
                        @foreach ($currentQuestion->answers as $answer)
                            {{-- value property ex. 3,1 (answer_id, is_checked) 3 is the answer id and 1 is checked (0 is not) --}}
                            <input type="radio" id="answer" name="selectedAnswer" wire:model="userAnswered"
                                value="{{ $answer->id . ',' . $answer->is_checked }}">
                            {{ $answer->answer }}
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
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                    <div class="grid place-items-center font-bold text-lg">
                        IN END
                    </div>
                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- enclose livewire stuff in a div --}}
                    <div>
                        <div class="mb-2">
                            <b>You Completed the Quiz!</b>
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
                        <div class="mb-2">
                            <b>Score</b> {{ $correctAnswers }}
                        </div>
                        <div class="mb-2">
                            <b>Percentage</b> {{ $quizPercentage }}
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
