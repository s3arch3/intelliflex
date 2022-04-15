{{-- THIS SECTION IS FOR GROUP STUDENTS FOR PROFESSORS, CLASSMATES FOR STUDENTS --}}
<div class="bg-white px-4 pt-4">
    <div class="flow-root">
        <div class="flex justify-between items-center space-x-2">
            {{-- STUDENT DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img class="w-12 rounded" src="{{ asset('assets/illustrations/student.png') }}" alt="">
            </div>

            {{-- STUDENT DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE STUDENT --}}
                <p class="font-display text-md font-bold text-blue-800 truncate">
                    @if ($myID == $studentIDinUser)
                        {{ $name . ' (YOU)' }}
                    @else
                        {{ $name }}
                    @endif
                </p>

                {{-- TOTAL POINTS CONTRIBUTED --}}
                A total of
                <span class="font-bold text-blue-800">
                    {{ $totalQuizPoints }}
                </span>
                points.
            </div>
        </div>

        {{-- STUDENT GOALS DISPLAY --}}
        <div>
            @if ($userType == 'professor')
                {{-- LIST ALL GOALS UNDER THAT GROUP AND IN ALL QUIZZES --}}
                <div
                    class="flex flex-wrap justify-center w-auto text-center bg-white border border-bg-gray-200 rounded-md p-4 mt-4">
                    @foreach ($quizGoals as $quizGoal)
                        @if ($quizGoal->is_achieved == '1' && $quizGoal->user_id == $studentIDinUser)
                            <div
                                class="w-fit flex flex-wrap justify-start mx-2 px-1 border border-bg-gray-200 rounded-sm">
                                {{ $goals->where('id', $quizGoal->goal_id)->first()->name }}
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        <div class="flex justify-end">
            {{-- BUTTON CONDITIONALS BASED ON user_type --}}
            @if ($userType == 'professor')
                {{-- REMOVE STUDENT BUTTON ON PROFESSOR VIEW --}}
                <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $studentIDinGroup]) }}">
                    @csrf
                    <x-jet-button class="bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="REMOVE STUDENT">
                    </x-jet-button>
                </form>
            @elseif ($userType == 'student')
            @endif
        </div>
    </div>
</div>
