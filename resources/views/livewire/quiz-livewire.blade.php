<div>
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    @if ($quizInStart)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- back button --}}
                    <x-jet-button>
                        <a href="{{ route('quizzes.index') }}">
                            GO BACK
                        </a>
                    </x-jet-button>

                    <br>

                    <div class="mx-auto">
                        <b>Quiz Livewire Start</b>
                        ID: {{ $quizID }}
                    </div>
                    <div class="mx-auto">
                        <b>Quiz Title</b> {{ $quizItem->name }}
                    </div>
                    <div class="mx-auto">
                        <b>Description</b> {{ $quizItem->description }}
                    </div>
                    <div class="mx-auto">
                        <b>Times Completed</b> {{ $quizItem->times_completed }}
                    </div>
                    <div class="mx-auto">
                        <b>Questions</b> {{ $questionsCount }}
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    {{-- <x-jet-button>
                        <a href="">
                            START QUIZ
                        </a>
                    </x-jet-button> --}}

                    <form wire:submit.prevent="startQuiz">
                        @csrf
                        <x-jet-button class="ml-4">
                            <input type="submit" value="Start Quiz">
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
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto">
                        IN PROGRESS
                    </div>
                    <div class="mx-auto">
                        <b>Quiz Progress</b>
                    </div>
                    <div class="mx-auto">
                        <b>Question Number</b> {{ $count }}
                    </div>
                    <div class="mx-auto">
                        <b>Question</b> {{ $currentQuestion->question }}
                    </div>

                    {{-- list all the choices here --}}
                    @foreach ($currentQuestion->answers as $answer)
                        {{-- value property ex. 3,1 (answer_id, is_checked) 3 is the answer id and 1 is checked (0 is not) --}}
                       <input type="radio" id="answer" name="selectedAnswer" wire:model="userAnswered" value="{{ $answer->id . ',' . $answer->is_checked }}">
                       {{ $answer->answer }}
                       <br>
                    @endforeach

                    {{-- "Next Question" or "Show Results" --}}
                    <form wire:submit.prevent="nextQuestion">
                        @csrf
                        @if ($count < $questionsCount)
                            <x-jet-button class="ml-4">
                                <input type="submit" value="Next Question">
                            </x-jet-button>
                        @else
                            <x-jet-button class="ml-4">
                                <input type="submit" value="Show Results">
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
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto">
                        IN END
                    </div>

                    <div class="mx-auto">
                        <b>You Completed the Quiz!</b>
                        ID: {{ $quizID }}
                    </div>
                    <div class="mx-auto">
                        <b>Quiz Title</b> {{ $quizItem->name }}
                    </div>
                    <div class="mx-auto">
                        <b>Description</b> {{ $quizItem->description }}
                    </div>
                    <div class="mx-auto">
                        <b>Times Completed</b> {{ $quizItem->times_completed }}
                    </div>
                    <div class="mx-auto">
                        <b>Questions</b> {{ $questionsCount }}
                    </div>


                    <div class="mx-auto">
                        <b>Score</b>
                    </div>

                    <x-jet-button>
                        <a wire:click="">
                            See Full Details
                        </a>
                    </x-jet-button>

                    <x-jet-button>
                        <a wire:click="">
                            Back to Home
                        </a>
                    </x-jet-button>

                    <x-jet-button>
                        <a wire:click="">
                            Take Quiz Again
                        </a>
                    </x-jet-button>
                </div>
            </div>
        </div>
    @endif
</div>
