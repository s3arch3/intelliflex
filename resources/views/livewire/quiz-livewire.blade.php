<div>
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    {{-- QUIZ START FRAME --}}
    @if ($quizInStart)
        <div class="py-6">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <br>
                <div class="block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                    <div class="flex flex-col items-center">
                        <div class="flex items-center">
                            {{-- QUIZ LOGO --}}
                            <div class="flex-shrink-0">
                                <img class="w-12 rounded-full" src="{{ asset('assets/illustrations/quiz-logo.png') }}" alt="">
                            </div>

                            {{-- QUIZ NAME --}}
                            <p class="font-display ml-4 text-3xl font-bold text-blue-600">
                                {{ $quizItem->name }}
                            </p>
                        </div>

                        {{-- QUIZ DESCRIPTION --}}
                        <p class="ml-4 text-sm font-regular text-gray-700 mb-2">
                            {{ $quizItem->description }}
                        </p>

                        {{-- TIMES COMPLETED --}}
                        <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2">
                            Times Completed: {{ $quizItem->times_completed }}
                        </p>

                        {{-- QUESTIONS COUNT --}}
                        <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2">Questions:
                            {{ $questionsCount }}
                        </p>

                        {{-- WHEN THE QUIZ IS TAKEN FROM A GROUP --}}
                        @if ($groupProfessorID != 0)
                            <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2"> Group Professor ID:
                                {{ $groupProfessorID }}</p>
                            <p class="font-display ml-4 text-md font-bold text-gray-900 mb-2"> Group Quiz ID:
                                {{ $groupQuizID }}</p>
                        @endif

                    </div>
                </div>
                <div class="flex justify-center">
                    {{-- START QUIZ BUTTON --}}
                    <form wire:submit.prevent="startQuiz" class="mx-4">
                        @csrf
                        <x-jet-button class="font-semibold">
                            <input type="submit" value="START QUIZ">
                        </x-jet-button>
                    </form>

                    {{-- BACK BUTTON --}}
                    <x-jet-button class="mx-4">
                        <a href="{{ route('quizzes.index') }}">
                            GO BACK
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
                        {{-- ENCLOSE LIVEWIRE STUFF IN A DIV --}}

                        {{-- CONFETTI LOGO --}}
                        <img src="{{ asset('assets/illustrations/confetti.png') }}" class="w-10 h-10 mb-4" alt="">

                        {{-- CONGRATS TEXT --}}
                        <p class="font-display font-semibold text-4xl text-gray-800">
                            Congratulations, you completed the
                        </p>
                        <div class="mb-6 font-display text-4xl inline-flex">
                            <p class="font-bold text-blue-600">{{ $quizItem->name }} </p>
                            <p class="ml-2 font-semibold text-gray-800">quiz!
                        </div>

                        {{-- QUIZ DESCRIPTION --}}
                        <div class="mb-2">
                            {{ $quizItem->description }}
                        </div>

                        {{-- YOUR SCORE IS X/X --}}
                        <div class="mb-2 text-gray-800">
                            <p class="mb-2 text-lg font-semibold">
                                Your score is:
                            </p>
                            <p class=" mb-4 text-4xl font-bold">
                                <span class="text-blue-600">
                                    {{ $correctAnswers }}
                                </span>
                                 out of
                                {{ $questionsCount }}
                            </p>
                        </div>

                        {{-- TIMES COMPLETED --}}
                        <div class="text-lg inline-flex">
                            <p class="font-semibold text-gray-800">You completed this quiz
                            <p class="ml-2 font-bold text-blue-600">{{ $quizItem->times_completed }} times
                        </div>

                        {{-- QUIZ PERCENTAGE --}}
                        <div class="font-semibold text-gray-800 text-lg inline-flex">
                            Your accuracy level is {{ $quizPercentage . '%' }}
                        </div>
                    </div>
                </div>

                {{-- NO "submit.prevent" INCLUDED TO PRODUCT DEFAULT ACTION WHICH IS REFRESHING AND GOING TO THE DETAILS PAGE --}}
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

                {{-- REPEAT QUIZ BUTTON --}}
                <form wire:submit.prevent="startQuiz">
                    @csrf
                    <x-jet-button class="font-semibold">
                        <input type="submit" value="TAKE QUIZ AGAIN">
                    </x-jet-button>
                </form>
            </div>
        </div>
    @endif
</div>
