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

    {{-- GROUP DETAILS SUMMARY --}}
    <x-group-detail-item :groupID="$groupProfessorItem->id" :groupName="$groupProfessorItem->name"
        :groupDescription="$groupProfessorItem->description" :groupCode="$groupProfessorItem->code"
        :isActive="$groupProfessorItem->is_active" :totalGroupPoints="$totalGroupPoints"
        :professorName="$groupProfessorOwner" :numberOfStudents="$groupStudentCount" />

    {{-- DISPLAYS THE GROUP'S COLLECTIVE ACHIEVEMENTS --}}
    <div class="container my-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
        <label class="font-display font-bold text-3xl mb-2">
            Collective Achievements
        </label>
    </div>
    <div class="flex flex-wrap gap-4 justify-center">
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
            <x-group-goal-item :goal="100" :totalGroupPoints="$totalGroupPoints" :achieved="true"
                goalName="Bronze Status" goalDescription="Achieve more than 100 points." />
        @else
            {{-- UNACHIEVED STATUS --}}
            <x-group-goal-item :goal="100" :totalGroupPoints="$totalGroupPoints" :achieved="false"
                goalName="Bronze Status" goalDescription="Achieve more than 100 points." />
        @endif

        {{-- 3 STATUS --}}
        @if ($totalGroupPoints >= 150)
            {{-- ACHIEVED STATUS --}}
            <x-group-goal-item :goal="150" :totalGroupPoints="$totalGroupPoints" :achieved="true"
                goalName="Silver Status" goalDescription="Achieve more than 150 points." />
        @else
            {{-- UNACHIEVED STATUS --}}
            <x-group-goal-item :goal="150" :totalGroupPoints="$totalGroupPoints" :achieved="false"
                goalName="Silver Status" goalDescription="Achieve more than 150 points." />
        @endif

        {{-- 4 STATUS --}}
        @if ($totalGroupPoints >= 200)
            {{-- ACHIEVED STATUS --}}
            <x-group-goal-item :goal="200" :totalGroupPoints="$totalGroupPoints" :achieved="true" goalName="Gold Status"
                goalDescription="Achieve more than 200 points." />
        @else
            {{-- UNACHIEVED STATUS --}}
            <x-group-goal-item :goal="200" :totalGroupPoints="$totalGroupPoints" :achieved="false"
                goalName="Gold Status" goalDescription="Achieve more than 200 points." />
        @endif

        {{-- 5 STATUS --}}
        @if ($totalGroupPoints >= 400)
            {{-- ACHIEVED STATUS --}}
            <x-group-goal-item :goal="400" :totalGroupPoints="$totalGroupPoints" :achieved="true"
                goalName="Platinum Status" goalDescription="Achieve more than 400 points." />
        @else
            {{-- UNACHIEVED STATUS --}}
            <x-group-goal-item :goal="400" :totalGroupPoints="$totalGroupPoints" :achieved="false"
                goalName="Platinum Status" goalDescription="Achieve more than 400 points." />
        @endif

        {{-- 6 STATUS --}}
        @if ($totalGroupPoints >= 500)
            {{-- ACHIEVED STATUS --}}
            <x-group-goal-item :goal="500" :totalGroupPoints="$totalGroupPoints" :achieved="true"
                goalName="Diamond Status" goalDescription="Achieve more than 500 points." />
        @else
            {{-- UNACHIEVED STATUS --}}
            <x-group-goal-item :goal="500" :totalGroupPoints="$totalGroupPoints" :achieved="false"
                goalName="Diamond Status" goalDescription="Achieve more than 500 points." />
        @endif
    </div>

    {{-- INTERFACE CHANGE BASED ON user_type --}}
    @if ($userType == 'student')
        {{-- QUIZZES ON THIS GROUP --}}
        {{-- QUIZZES ON THIS GROUP --}}
        {{-- QUIZZES ON THIS GROUP --}}
        <div class="block p-10 bg-white rounded-md shadow-sm">
            <label for="quizList"
                class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Quizzes
                List</label>
            <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                @foreach ($groupQuizzes as $groupQuiz)
                    <div class="border border-bg-gray-200 rounded-sm">
                        <x-group-quiz-item :name="$groupQuiz->quiz->name" :description="$groupQuiz->quiz->description"
                            :timesCompleted="$groupQuiz->quiz->times_completed" :isActive="$groupQuiz->quiz->is_active"
                            :id="$groupQuiz->quiz->id" :questionsCount="$groupQuiz->quiz->questions->count()"
                            :groupQuizID="$groupQuiz->id" :groupProfessorID="$groupQuiz->group_professor_id"
                            :userType="$userType" />

                        {{-- LOCAL GOALS COUNTER --}}
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


        {{-- CLASSMATES LIST --}}
        {{-- CLASSMATES LIST --}}
        {{-- CLASSMATES LIST --}}
        <div class="block p-10 bg-white rounded-md shadow-sm">
            <label for="studentList" class="text-xl font-medium text-gray-900 after:ml-0.5 after:text-red-500">My
                Groupmates</label>
            <br>

            @foreach ($groupStudents as $groupStudent)
                <div class="text-md leading-relaxed font-semibold text-gray-00 border-gray-500">
                    {{-- <label>CLASSMATE ID: {{ $groupStudent->user_id }}</label> <br> --}}
                    @if ($userID == $groupStudent->user_id)
                        <label>{{ $groupStudent->user->name }} (YOU)</label>
                        <?php
                        $totalQuizPoints = App\Models\QuizLog::where('group_professor_id', $groupProfessorItem->id)
                            ->where('user_id', Auth::user()->id)
                            ->sum('score');
                        ?>
                        Total Contributed Points:
                        [{{ $totalQuizPoints }}]
                    @else
                        <label>CLASSMATE NAME: {{ $groupStudent->user->name }}</label><br>
                        <?php
                        $totalQuizPoints = App\Models\QuizLog::where('group_professor_id', $groupProfessorItem->id)
                            ->where('user_id', $groupStudent->user->id)
                            ->sum('score');
                        ?>
                        Total Contributed Points:
                        [{{ $totalQuizPoints }}]
                    @endif
                </div>
                <br>
            @endforeach
        </div>
    @elseif ($userType == 'professor')
        {{-- DISPLAYS THE GROUP'S COLLECTIVE ACHIEVEMENTS --}}
        <div class="container my-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
            <label class="font-display font-bold text-3xl mb-2">
                Quizzes in this Group
            </label>
        </div>

        {{-- QUIZZES ON THIS GROUP --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- QUIZ LIST --}}
            <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                @foreach ($groupQuizzes as $groupQuiz)
                    <x-group-quiz-item :name="$groupQuiz->quiz->name" :description="$groupQuiz->quiz->description"
                        :timesCompleted="$groupQuiz->quiz->times_completed" :isActive="$groupQuiz->quiz->is_active"
                        :id="$groupQuiz->quiz->id" :questionsCount="$groupQuiz->quiz->questions->count()"
                        :groupQuizID="$groupQuiz->id" :groupProfessorID="$groupQuiz->group_professor_id"
                        :userType="$userType" />
                @endforeach
            </ul>

            {{-- ADD QUIZ BUTTON --}}
            <x-jet-button>
                <a href="{{ route('addQuiz', ['id' => $groupProfessorItem->id]) }}">
                    {{ __('ADD GROUP QUIZ') }}
                </a>
            </x-jet-button>
        </div>

         {{-- STUDENT LIST TITLE --}}
         <div class="container my-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
            <label class="font-display font-bold text-3xl mb-2">
                My Students
            </label>
        </div>

        {{-- STUDENT LIST --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($groupStudents as $groupStudent)
                <div class="text-md leading-relaxed font-semibold text-gray-00 border-gray-500">
                    <label>STUDENT ID: {{ $groupStudent->user_id }}</label> <br>
                    <label>STUDENT NAME: {{ $groupStudent->user->name }}</label> <br>
                </div>
                <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $groupStudent->id]) }}">
                    @csrf
                    <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="REMOVE STUDENT">
                    </x-jet-button>
                </form>
                <br>
            @endforeach
        </div>
    @elseif ($userType == 'admin')
    @endif
</x-app-layout>
