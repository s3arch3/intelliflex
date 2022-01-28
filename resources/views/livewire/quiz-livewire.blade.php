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

                    <x-jet-button>
                        <a href="">
                            START QUIZ
                        </a>
                    </x-jet-button>

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
                {{-- back button --}}
                {{-- quiz title --}}
                {{-- quiz description --}}
                {{-- question count --}}
                {{-- start button --}}

                {{ $quizID }}


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
                {{-- back button --}}
                {{-- quiz title --}}
                {{-- quiz description --}}
                {{-- question count --}}
                {{-- start button --}}

                {{ $quizID }}

            </div>
        </div>
    </div>
    @endif
</div>
