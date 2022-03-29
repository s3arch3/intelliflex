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

            {{-- list all goals here --}}
            <div class="flex flex-wrap gap-4 justify-center">
                @foreach ($goals as $goal)
                    <x-goal-item :goalID="$goal->id" :goalName="$goal->name" :goalDescription="$goal->description"
                        :goalRequirement="$goal->requirement" />
                @endforeach
            </div>
            <div class="py-12">
                <p class=" font-display font-bold text-3xl mb-2"> Single quiz
                    <span class="text-blue-600"> goal </span>achievements.
                </p>
                <p>These are the list of your quizzes and achieved goals.</p>
            </div>
            {{-- list all quizzes here and goal progress --}}
            @foreach ($quizzes as $quiz)
                <div
                    class="flex flex-wrap justify-center w-auto  text-center bg-white border border-bg-gray-200 rounded-md p-4">
                    <div class="justify-self-start block w-full text-left">
                        <b class="text-blue-600"> {{ $quiz->name }}</b>
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
    </div>
</x-app-layout>
