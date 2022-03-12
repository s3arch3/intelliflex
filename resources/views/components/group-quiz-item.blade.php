<div class="bg-white rounded-md border shadow-sm px-4 py-4 mb-2">
    <div class="flex justify-between items-center space-x-4">
        <div class="flow-root">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-12 rounded-full" src="{{ asset('assets/illustrations/quiz-logo.png') }}" alt="">
                </div>
                <div class="flex-1 min-w-0">
                    <a href={{ route('quizzes.show', $id) }}
                        class="font-display hover:underline text-md font-bold text-blue-800 truncate ">
                        {{ $name . ' (ID ' . $id . ')' }}
                    </a>
                    <p class="mb-2 text-sm text-gray-600 truncate">
                        {{ $description }}
                    </p>
                    Questions Count:
                    [{{ $questionsCount }}]
                    Times Completed:
                    [{{ $timesCompleted }}]
                    Active?:
                    [{{ $isActive }}]
                    Quiz ID:
                    [{{ $groupQuizID }}]
                </div>

                {{-- BUTTONS CONDITIONAL START --}}
                @if ($userType == 'student')
                    {{-- <form method="POST" action="{{ route('take', $id, ['groupQuizID' => $groupQuizID, 'groupProfessorID' => $groupProfessorID]) }}"> --}}
                    <form method="POST" action="{{ route('take', $id) }}">
                        @csrf
                        {{-- DON'T MODIFY --}}
                        <input id="name" class="hidden" name="groupQuizID" value="{{ $groupQuizID }}"></input>
                        {{-- DON'T MODIFY --}}
                        <input id="name" class="hidden" name="groupProfessorID"
                            value="{{ $groupProfessorID }}"></input>
                        <x-jet-button class="ml-4">
                            <input class="font-semibold" type="submit" value="TAKE">
                        </x-jet-button>
                    </form>
                @elseif ($userType == 'professor')
                    <div class="relative inline-flex text-base font-semibold text-gray-900 ">
                        <x-jet-button class="ml-4">
                            <a href="{{ route('quizzes.edit', $id) }}">
                                {{ __('Edit') }}
                            </a>
                        </x-jet-button>

                        <form method="POST"
                            action="{{ route('removeQuizToGroup', ['groupQuizID' => $groupQuizID, 'groupProfessorID' => $groupProfessorID]) }}">
                            @csrf
                            @method('DELETE')
                            <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                                <input class="font-semibold" type="submit" value="DELETE">
                            </x-jet-button>
                        </form>
                    </div>
                @endif
                {{-- BUTTONS CONDITIONAL END --}}



                {{-- #1 [STUDENT NAME] [SCORE] [GOLD]
                #2 [STUDENT NAME] [SCORE] [SILVER]
                #3 [STUDENT NAME] [SCORE] [BRONZE] --}}

                {{-- accepts:
                group quiz id (for query here later) --}}

                {{-- @foreach ($quizLogs as $quizLog)
                if 1 == gold image
                if 2 == silver image
                if 3 == bronze image
                <div class="flex-1 min-w-0">
                    [{{ $studentName }}]
                    TOTAL SCORE:
                    [{{ $totalQuizScore }}]
                    [{{ $achievement }}]
                </div>
                <br>

                @endforeach --}}



            </div>

            {{-- RANKING --}}
            {{-- RANKING --}}
            {{-- RANKING --}}

            {{-- $quizLogItems =  QuizLog::where('group_professor_id', $id)->with('user')->get();

            @foreach ($quizLogItems as $quizLogItem)


            @endforeach --}}

            {{-- <p class="mb-2 text-sm text-gray-600 truncate">
                {{ $description }}
            </p> --}}
        </div>
    </div>
</div>
