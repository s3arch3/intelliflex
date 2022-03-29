{{-- THIS CODE IS A TEMPLATE FOR ALL THE QUIZZES THAT ARE ADDED TO A GROUP --}}
<div class="bg-white rounded-md border shadow-sm px-4 py-4 mb-2">
    <div class="flow-root">
        <div class="flex justify-between items-center space-x-2">
            {{-- QUIZ DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img class="w-12 rounded-full" src="{{ asset('assets/illustrations/quiz-logo.png') }}" alt="">
            </div>

            {{-- QUIZ MAIN DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE QUIZ --}}
                <a href={{ route('quizzes.show', $id) }}
                    class="font-display hover:underline text-md font-bold text-blue-800 truncate ">
                    {{ $name }}
                </a>

                {{-- ACTIVE/INACTIVE INDICATOR --}}
                @if ($isActive == 1)
                    <span
                        class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2 mx-2">
                        Active
                    </span>
                @elseif ($isActive == 0)
                    <span
                        class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2 mx-2">
                        Inactive
                    </span>
                @endif
                {{-- DESCRIPTION OF THE QUIZ --}}
                <p class=" text-sm text-gray-600">
                    {{ $description }}
                </p>
                {{-- QUESTION COUNT --}}
                <span class="font-bold text-blue-800">
                    {{ $questionsCount }}
                </span>
                questions, completed
                {{-- TIMES COMPLETED --}}
                <span class="font-bold text-blue-800">
                    {{ $timesCompleted }}
                </span>
                times.

                <?php
                $totalQuizPoints = App\Models\QuizLog::where('group_professor_id', $groupProfessorID)
                    ->where('group_quiz_id', $groupQuizID)
                    ->sum('score');
                ?>
                <br>
                <span class="font-bold text-blue-800">
                    {{ $totalQuizPoints }}
                </span>
                total accumulated points.
            </div>

            {{-- QUIZ CONTROLS: EDIT, TAKE, DELETE --}}
            <div class="relative inline-flex text-base font-semibold text-gray-900 ">
                {{-- BUTTONS CONDITIONAL START DEPENDING ON USER TYPE --}}
                @if ($userType == 'student')
                    {{-- TAKE BUTTON --}}
                    <form method="POST" action="{{ route('take', $id) }}">
                        @csrf
                        {{-- IMPORTANT HIDDEN VALUES, DON'T MODIFY --}}
                        <input id="name" class="hidden" name="groupQuizID" value="{{ $groupQuizID }}">
                        </input>
                        {{-- IMPORTANT HIDDEN VALUES, DON'T MODIFY --}}
                        <input id="name" class="hidden" name="groupProfessorID"
                            value="{{ $groupProfessorID }}">
                        </input>
                        <x-jet-button class="ml-4">
                            <input class="font-semibold" type="submit" value="TAKE">
                        </x-jet-button>
                    </form>
                @elseif ($userType == 'professor')
                    {{-- EDIT BUTTON --}}
                    <x-jet-button class="ml-4">
                        <a href="{{ route('quizzes.edit', $id) }}">
                            {{ __('Edit') }}
                        </a>
                    </x-jet-button>

                    {{-- DELETE BUTTON --}}
                    <form method="POST"
                        action="{{ route('removeQuizToGroup', ['groupQuizID' => $groupQuizID, 'groupProfessorID' => $groupProfessorID]) }}">
                        @csrf
                        @method('DELETE')
                        <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                            <input class="font-semibold" type="submit" value="DELETE">
                        </x-jet-button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
