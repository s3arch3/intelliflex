{{-- THIS CODE IS A TEMPLATE FOR ALL THE QUIZZES THAT ARE ADDED TO A GROUP --}}
<div class="p-4 bg-white">
    <div class="flow-root">
        <div class="flex flex-grow justify-between space-x-2">
            {{-- QUIZ DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img class="w-12 rounded-full" src="{{ asset('assets/illustrations/quiz-logo.png') }}" alt="">
            </div>

            {{-- QUIZ MAIN DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE QUIZ --}}
                <a href={{ route('quizzes.show', $id) }}
                    class="font-display hover:underline text-md font-bold text-blue-800 mr-2">
                    {{ $name }}
                </a>

                {{-- ACTIVE/INACTIVE INDICATOR --}}
                @if ($isActive == 1)
                    <span
                        class="inline-flex items-center bg-emerald-50 border border-emerald-300 px-2 rounded text-emerald-500 font-semibold text-sm w-auto mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>ACTIVE
                    </span>
                @elseif ($isActive == 0)
                    <span
                        class="inline-flex items-center bg-amber-50 border border-amber-300 px-2 rounded text-amber-500 font-semibold text-sm w-auto mt-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd" />
                        </svg>INACTIVE
                    </span>
                @endif
                {{-- DESCRIPTION OF THE QUIZ --}}
                <p class="text-sm text-gray-600 mt-2">
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
        </div>
        {{-- QUIZ CONTROLS: EDIT, TAKE, DELETE --}}
        <div class="flex justify-end p-4">
            <div class="inline-flex rounded-md" role="group">
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
                    <a href="{{ route('quizzes.edit', $id) }}"
                        class="font-semibold text-xs text-blue-800 px-4 hover:text-blue-600 py-2 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700">
                        {{ __('EDIT') }}
                    </a>
                    {{-- DELETE BUTTON --}}
                    <form method="POST"
                        action="{{ route('removeQuizToGroup', ['groupQuizID' => $groupQuizID, 'groupProfessorID' => $groupProfessorID]) }}">
                        @csrf
                        @method('DELETE')
                        <input
                            class="font-semibold text-xs text-red-500 px-4 hover:text-red-400 py-2 bg-white rounded-r-lg border-t border-b border-r border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-red-400 focus:text-red-500"
                            type="
                            submit" value="DELETE">
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
