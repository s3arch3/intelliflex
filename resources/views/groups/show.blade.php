<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group Details') }}
        </h2>
    </x-slot>
    <x-group-detail-item
        :groupID="$groupProfessorItem->id"
        :groupName="$groupProfessorItem->name"
        :groupDescription="$groupProfessorItem->description"
        :groupCode="$groupProfessorItem->code"
        :isActive="$groupProfessorItem->is_active"
        :totalGroupPoints="$totalGroupPoints"
        :professorName="$groupProfessorOwner"
        :numberOfStudents="$groupStudentCount"
    />
    <div class="block px-24 py-4 bg-yellow-400 rounded-md shadow-sm mx-auto">
        {{-- <form class="text-md leading-relaxed font-semibold text-gray-00">
            <label>GROUP ID: {{ $groupProfessorItem->id }}</label> <br>
            <label>GROUP NAME: {{ $groupProfessorItem->name }}</label> <br>
            <label>GROUP DESC: {{ $groupProfessorItem->description }}</label> <br>
            <label>GROUP CODE: {{ $groupProfessorItem->code }}</label> <br>
            <label>ACTIVE: @if ($groupProfessorItem->is_active === '1')
                    YES
                @else
                    NO
                @endif
            </label>
            <br>
            {{ $totalGroupPoints }}
            <br>
            TOTAL ACCUMULATED QUIZ POINTS
        </form> --}}

        <div>
            COLLECTIVE ACHIEVEMENTS
            <div class="flex justify-center ">
                {{-- STATIC PARAMETERS HAVE NO COLON IN THEIR NAMES --}}
                {{-- STATIC PARAMETERS HAVE NO COLON IN THEIR NAMES --}}
                {{-- STATIC PARAMETERS HAVE NO COLON IN THEIR NAMES --}}

                {{-- 1 STATUS --}}
                @if ($totalGroupPoints > 50)
                    <x-group-goal-item :achieved="true" goalName="Iron Status" goalDescription="Achieve more than 50 points." />
                @else
                    <x-group-goal-item :achieved="false" goalName="Iron Status" goalDescription="Achieve more than 50 points." />
                @endif

                {{-- 2 STATUS --}}
                @if ($totalGroupPoints > 100)
                    <x-group-goal-item :achieved="true" goalName="Bronze Status" goalDescription="Achieve more than 100 points." />
                @else
                    <x-group-goal-item :achieved="false" goalName="Bronze Status" goalDescription="Achieve more than 100 points." />
                @endif

                {{-- 3 STATUS --}}
                @if ($totalGroupPoints > 150)
                    <x-group-goal-item :achieved="true" goalName="Silver Status" goalDescription="Achieve more than 150 points." />
                @else
                    <x-group-goal-item :achieved="false" goalName="Silver Status" goalDescription="Achieve more than 150 points." />
                @endif

                {{-- 4 STATUS --}}
                @if ($totalGroupPoints > 200)
                    <x-group-goal-item :achieved="true" goalName="Gold Status" goalDescription="Achieve more than 200 points." />
                @else
                    <x-group-goal-item :achieved="false" goalName="Gold Status" goalDescription="Achieve more than 200 points." />
                @endif

                {{-- 5 STATUS --}}
                @if ($totalGroupPoints > 400)
                    <x-group-goal-item :achieved="true" goalName="Platinum Status" goalDescription="Achieve more than 400 points." />
                @else
                    <x-group-goal-item :achieved="false" goalName="Platinum Status" goalDescription="Achieve more than 400 points." />
                @endif

                {{-- 6 STATUS --}}
                @if ($totalGroupPoints > 500)
                    <x-group-goal-item :achieved="true" goalName="Diamond Status" goalDescription="Achieve more than 500 points." />
                @else
                    <x-group-goal-item :achieved="false" goalName="Diamond Status" goalDescription="Achieve more than 500 points." />
                @endif
            </div>
        </div>
    </div>


    @if ($userType == 'student')
        STUDENT INTERFACE
        <br>
        <br>
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
        PROFESSOR INTERFACE
        <br>
        <br>


        {{-- QUIZZES LIST --}}
        {{-- QUIZZES LIST --}}
        {{-- QUIZZES LIST --}}

        <x-jet-button>
            <a href="{{ route('addQuiz', ['id' => $groupProfessorItem->id]) }}">
                {{ __('ADD QUIZ') }}
            </a>
        </x-jet-button>

        {{-- QUIZZES ON THIS GROUP --}}
        {{-- QUIZZES ON THIS GROUP --}}
        {{-- QUIZZES ON THIS GROUP --}}
        <div class="block p-10 bg-white rounded-md shadow-sm">
            <label for="quizList"
                class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Quizzes
                List</label>
            <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                @foreach ($groupQuizzes as $groupQuiz)
                    <x-group-quiz-item :name="$groupQuiz->quiz->name" :description="$groupQuiz->quiz->description"
                        :timesCompleted="$groupQuiz->quiz->times_completed" :isActive="$groupQuiz->quiz->is_active"
                        :id="$groupQuiz->quiz->id" :questionsCount="$groupQuiz->quiz->questions->count()"
                        :groupQuizID="$groupQuiz->id" :groupProfessorID="$groupQuiz->group_professor_id"
                        :userType="$userType" />
                @endforeach
            </ul>
        </div>

        <br>
        <br>

        {{-- STUDENT LIST --}}
        {{-- STUDENT LIST --}}
        {{-- STUDENT LIST --}}
        <div class="block p-10 bg-white rounded-md shadow-sm">
            <label for="studentList"
                class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Student
                List</label>
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
        ADMIN INTERFACE
        <br>
        <br>

    @endif

</x-app-layout>
