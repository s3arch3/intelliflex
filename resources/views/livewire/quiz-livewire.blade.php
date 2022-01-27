<div>
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    @if ($quizInStart)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto">
                        Quiz Livewire
                    </div>
                    {{-- back button --}}
                    {{-- quiz title --}}
                    {{-- quiz description --}}
                    {{-- question count --}}
                    {{-- times finished --}}
                    {{-- start button --}}

                    {{ $quizID }}

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
