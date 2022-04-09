<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{-- DISPLAY HEADER ACCORDING TO user_type --}}
            @if ($userType == 'student')
                {{ __('Group Details (Student)') }}
            @elseif ($userType == 'professor')
                {{ __('Group Details (Professor)') }}
            @elseif ($userType == 'admin')
                {{ __('Group Details (Admin)') }}
            @endif
        </h2>
    </x-slot>
    <div class="container mx-auto py-4 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- GROUP DETAILS SUMMARY --}}
            <x-group-detail-item :groupID="$groupProfessorItem->id" :groupName="$groupProfessorItem->name" :groupDescription="$groupProfessorItem->description" :groupCode="$groupProfessorItem->code"
                :isActive="$groupProfessorItem->is_active" :totalGroupPoints="$totalGroupPoints" :professorName="$groupProfessorOwner" :numberOfStudents="$groupStudentCount" />

            {{-- DISPLAYS THE GROUP'S COLLECTIVE ACHIEVEMENTS --}}
            <p class="font-semibold text-xl mt-8 mb-4 sm:text-left lg:text-left md:text-left text-center">
                Collective Achievements
            </p>
        </div>
        <div class="flex flex-wrap justify-center lg:justify-start gap-4">
            {{-- STATIC PARAMETERS HAVE NO COLON IN THEIR NAMES --}}
            {{-- STATIC PARAMETERS HAVE NO COLON IN THEIR NAMES --}}
            {{-- STATIC PARAMETERS HAVE NO COLON IN THEIR NAMES --}}

            {{-- 1 STATUS --}}
            @if ($totalGroupPoints >= 50)
                {{-- ACHIEVED STATUS --}}
                <x-group-goal-item :goal="50" :totalGroupPoints="$totalGroupPoints" :achieved="true" goalName="Iron Status"
                    goalDescription="Achieve more than 50 points." />
            @else
                {{-- UNACHIEVED STATUS --}}
                <x-group-goal-item :goal="50" :totalGroupPoints="$totalGroupPoints" :achieved="false" goalName="Iron Status"
                    goalDescription="Achieve more than 50 points." />
            @endif

            {{-- 2 STATUS --}}
            @if ($totalGroupPoints >= 100)
                {{-- ACHIEVED STATUS --}}
                <x-group-goal-item :goal="100" :totalGroupPoints="$totalGroupPoints" :achieved="true" goalName="Bronze Status"
                    goalDescription="Achieve more than 100 points." />
            @else
                {{-- UNACHIEVED STATUS --}}
                <x-group-goal-item :goal="100" :totalGroupPoints="$totalGroupPoints" :achieved="false" goalName="Bronze Status"
                    goalDescription="Achieve more than 100 points." />
            @endif

            {{-- 3 STATUS --}}
            @if ($totalGroupPoints >= 150)
                {{-- ACHIEVED STATUS --}}
                <x-group-goal-item :goal="150" :totalGroupPoints="$totalGroupPoints" :achieved="true" goalName="Silver Status"
                    goalDescription="Achieve more than 150 points." />
            @else
                {{-- UNACHIEVED STATUS --}}
                <x-group-goal-item :goal="150" :totalGroupPoints="$totalGroupPoints" :achieved="false" goalName="Silver Status"
                    goalDescription="Achieve more than 150 points." />
            @endif

            {{-- 4 STATUS --}}
            @if ($totalGroupPoints >= 200)
                {{-- ACHIEVED STATUS --}}
                <x-group-goal-item :goal="200" :totalGroupPoints="$totalGroupPoints" :achieved="true" goalName="Gold Status"
                    goalDescription="Achieve more than 200 points." />
            @else
                {{-- UNACHIEVED STATUS --}}
                <x-group-goal-item :goal="200" :totalGroupPoints="$totalGroupPoints" :achieved="false" goalName="Gold Status"
                    goalDescription="Achieve more than 200 points." />
            @endif

            {{-- 5 STATUS --}}
            @if ($totalGroupPoints >= 400)
                {{-- ACHIEVED STATUS --}}
                <x-group-goal-item :goal="400" :totalGroupPoints="$totalGroupPoints" :achieved="true" goalName="Platinum Status"
                    goalDescription="Achieve more than 400 points." />
            @else
                {{-- UNACHIEVED STATUS --}}
                <x-group-goal-item :goal="400" :totalGroupPoints="$totalGroupPoints" :achieved="false" goalName="Platinum Status"
                    goalDescription="Achieve more than 400 points." />
            @endif

            {{-- 6 STATUS --}}
            @if ($totalGroupPoints >= 500)
                {{-- ACHIEVED STATUS --}}
                <x-group-goal-item :goal="500" :totalGroupPoints="$totalGroupPoints" :achieved="true" goalName="Diamond Status"
                    goalDescription="Achieve more than 500 points." />
            @else
                {{-- UNACHIEVED STATUS --}}
                <x-group-goal-item :goal="500" :totalGroupPoints="$totalGroupPoints" :achieved="false" goalName="Diamond Status"
                    goalDescription="Achieve more than 500 points." />
            @endif
        </div>

        {{-- INTERFACE CHANGE BASED ON user_type --}}
        @if ($userType == 'student')
            {{-- QUIZZES TITLE --}}
            <div
                class="container my-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
                <label class="font-display font-bold text-3xl mb-2">
                    Quizzes on this Group
                </label>
            </div>

            {{-- QUIZZES ON THIS GROUP --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- QUIZ LIST --}}
                <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                    @foreach ($groupQuizzes as $groupQuiz)
                        <div class="border border-bg-gray-200 rounded-sm">
                            {{-- LIST QUIZ --}}
                            <x-group-quiz-item :name="$groupQuiz->quiz->name" :description="$groupQuiz->quiz->description" :timesCompleted="$groupQuiz->quiz->times_completed"
                                :isActive="$groupQuiz->quiz->is_active" :id="$groupQuiz->quiz->id" :questionsCount="$groupQuiz->quiz->questions->count()" :groupQuizID="$groupQuiz->id"
                                :groupProfessorID="$groupQuiz->group_professor_id" :userType="$userType" />

                            {{-- LIST GOALS UNDER THAT QUIZ --}}
                            <div
                                class="flex flex-wrap justify-center w-auto  text-center bg-white border border-bg-gray-200 rounded-md p-4">
                                @foreach ($quizGoals as $quizGoal)
                                    @if ($quizGoal->is_achieved == '1' && $quizGoal->quiz_id == $groupQuiz->id && $quizGoal->user_id == Auth::user()->id)
                                        <div
                                            class="w-fit flex flex-wrap justify-start mx-2 px-1 border border-bg-gray-200 rounded-sm">
                                            {{ $goals->where('id', $quizGoal->goal_id)->first()->name }}
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <br>
                    @endforeach
                </ul>
            </div>

            {{-- CLASSMATE LIST TITLE --}}
            <div
                class="container my-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
                <label class="font-display font-bold text-3xl mb-2">
                    My Classmates
                </label>
            </div>

            {{-- CLASSMATES LIST --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @foreach ($groupStudents as $groupStudent)
                    {{-- GROUP STUDENT ITEM COMPONENT FOR STUDENT/CLASSMATES --}}
                    <x-group-student-item :myID="Auth::user()->id" :groupProfessorID="$groupProfessorItem->id" :studentIDinGroup="$groupStudent->id" :studentIDinUser="$groupStudent->user_id"
                        :name="$groupStudent->user->name" :userType="$userType" />
                    <br>
                @endforeach
            </div>
        @elseif ($userType == 'professor')
            {{-- DISPLAYS THE GROUP'S COLLECTIVE ACHIEVEMENTS --}}
            <p class="font-semibold text-xl mt-8 mb-4 sm:text-left lg:text-left md:text-left text-center">
                Quizzes in this Group
            </p>

            {{-- QUIZZES ON THIS GROUP --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- QUIZ LIST --}}
                <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                    @foreach ($groupQuizzes as $groupQuiz)
                        <x-group-quiz-item :name="$groupQuiz->quiz->name" :description="$groupQuiz->quiz->description" :timesCompleted="$groupQuiz->quiz->times_completed" :isActive="$groupQuiz->quiz->is_active"
                            :id="$groupQuiz->quiz->id" :questionsCount="$groupQuiz->quiz->questions->count()" :groupQuizID="$groupQuiz->id" :groupProfessorID="$groupQuiz->group_professor_id"
                            :userType="$userType" />
                    @endforeach
                </ul>

                {{-- ADD QUIZ BUTTON --}}
                <div class="flex justify-end px-4">
                    <x-jet-button>
                        <a href="{{ route('addQuiz', ['id' => $groupProfessorItem->id]) }}">
                            {{ __('ADD GROUP QUIZ') }}
                        </a>
                    </x-jet-button>
                </div>
            </div>

            {{-- STUDENT LIST TITLE --}}
            <div
                class="container my-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
                <label class="font-display font-bold text-3xl mb-2">
                    My Students
                </label>
            </div>

            {{-- STUDENT LIST --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @foreach ($groupStudents as $groupStudent)
                    {{-- GROUP STUDENT ITEM COMPONENT FOR STUDENT/CLASSMATES --}}
                    <x-group-student-item :myID="Auth::user()->id" :groupProfessorID="$groupProfessorItem->id" :studentIDinGroup="$groupStudent->id" :studentIDinUser="$groupStudent->user_id"
                        :name="$groupStudent->user->name" :userType="$userType" :quizGoals="$quizGoals" />
                @endforeach
            </div>
        @elseif ($userType == 'admin')
        @endif
    </div>
</x-app-layout>
