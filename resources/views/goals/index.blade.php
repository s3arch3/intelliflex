<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Welcome to goals section.
                <hr>
                </hr>
                <br>
                <br>
                These are the available goals
                {{-- list all goals here --}}
                <div class="flex justify-items-center overflow-x-scroll">
                    @foreach ($goals as $goal)
                        <div
                            class="w-80  text-center my-2 bg-slate-200 outline outline-offset-2 outline-1 outline-yellow-500 rounded-3xl">
                            NAME: <b> {{ $goal->name }} </b>
                            <br>
                            DESC: <b> {{ $goal->description }} </b>
                            <br>
                            REQ: <b> {{ $goal->requirement }} </b>
                            <br>
                        </div>
                    @endforeach
                </div>
                These are list of quizzes and their achieved goals:
                {{-- list all quizzes here and goal progress --}}
                <div>
                    @foreach ($quizzes as $quiz)
                        <div
                            class="flex flex-wrap justify-center w-auto  text-center my-2 bg-slate-200 outline outline-offset-2 outline-1 outline-yellow-500 rounded-3xl">
                            <div class="justify-self-start block w-full text-left">
                                QUIZ NAME: <b> {{ $quiz->name }} </b>
                            </div>
                            <br>
                            @foreach ($quizGoals as $quizGoal)
                                @if (
                                $quizGoal->is_achieved == '1' &&
                                $quizGoal->quiz_id == $quiz->id &&
                                $quizGoal-> user_id  == Auth::user()->id
                                )

                                    <div class="w-fit flex flex-wrap justify-start mx-2 px-1 outline outline-offset-2 outline-1 outline-blue-500 rounded-3xl">
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
        </div>
    </div>
</x-app-layout>
