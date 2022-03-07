<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <p class=" font-display font-bold text-3xl mb-2"> Welcome to the
                    <span class="text-blue-600"> Goals </span>section!
                </p>
                <p>These are the available goals for you to achieve:</p>
            </div>

            <div class="">
                {{-- list all goals here --}}
                <div class="flex flex-wrap gap-4 justify-center">
                    @foreach ($goals as $goal)
                        <div class="w-80 text-center bg-white rounded-md p-4 border border-bg-gray-300">
                            <img src="{{ asset('assets/illustrations/goals-icon/move-up.png') }}"
                                class="mx-auto w-16 h-16 mb-4" alt="">
                            <b class="m-2 text-blue-600">{{ $goal->name }} </b>
                            <p class="m-2 text-sm text-gray-600">{{ $goal->description }} </p>
                            <b class="m-2 text-sm ">Requirement: {{ $goal->requirement }} </b>
                            <br>
                        </div>
                    @endforeach
                </div>
            </div>
            <h1 class="font-display font-semibold mb-4 mt-4">Achievements</h1>
            <p class="font-normal mb-4 mt-4 text-md">These are the list of your quizzes and achieved goals. </p>
            {{-- list all quizzes here and goal progress --}}
            @foreach ($quizzes as $quiz)
                <div
                    class="flex flex-wrap justify-center w-auto  text-center bg-white border border-bg-gray-200 rounded-md p-4">
                    <div class="justify-self-start block w-full text-left">
                        QUIZ NAME: <b> {{ $quiz->name }}</b>
                    </div>
                    <br>
                    @foreach ($quizGoals as $quizGoal)
                        @if ($quizGoal->is_achieved == '1' && $quizGoal->quiz_id == $quiz->id && $quizGoal->user_id == Auth::user()->id)
                            <div
                                class="w-fit flex flex-wrap justify-start mx-2 px-1 border border-bg-gray-200 rounded-sm">
                                {{ $goals->where('id', $quizGoal->goal_id)->first()->name }}
                            </div>
                        @endif
                    @endforeach
                </div>
                <br>
            @endforeach
        </div>
        {{-- GOALS
                - List all quiz
                - For each quiz, display all achievement PROGRESS
                - where is_achieved == 1 only

                Quiz Name
                - Goal 1
                - Goal 2
                - all goals in chip manner with flex div justify
                justify-items-center --}}
    </div>
</x-app-layout>
