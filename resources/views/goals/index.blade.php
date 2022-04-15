<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goals') }}
        </h2>
    </x-slot>
    <div class="pt-4 pb-10 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-8">
                <p class=" font-display font-bold text-3xl mb-2 lg:text-left text-center"> Welcome to the
                    <span class="text-blue-600"> Goals </span>section!
                </p>
                <p class="text-sm lg:text-left text-center">These are the available goals for you to achieve:</p>
            </div>

            {{-- list all goals here --}}
            <div class="flex flex-wrap gap-4 justify-center">
                @foreach ($goals as $goal)
                    <x-goal-item :goalID="$goal->id" :goalName="$goal->name" :goalDescription="$goal->description" :goalRequirement="$goal->requirement" />
                @endforeach
            </div>
            <div class="pt-8 pb-4">
                <p class="font-display font-bold text-3xl lg:text-left text-center"> Single quiz
                    <span class="text-blue-600"> goal </span>achievements.
                </p>
                <p class="text-sm lg:text-left text-center mt-2">These are the list of your quizzes and achieved goals.
                </p>
            </div>
            {{-- list all quizzes here and goal progress --}}
            @foreach ($quizzes as $quiz)
                <ul role="list" class="divide-y divide-slate-100">
                    <div class="flex flex-wrap justify-center w-auto text-center bg-white p-4">
                        <div class="justify-self-start block w-full text-left">
                            <p class="text-sm font-semibold text-gray-800">{{ $quiz->name }}</p>
                        </div>
                        @foreach ($quizGoals as $quizGoal)
                            @if ($quizGoal->is_achieved == '1' && $quizGoal->quiz_id == $quiz->id && $quizGoal->user_id == Auth::user()->id)
                                <div
                                    class="w-fit flex flex-wrap justify-start mx-2 px-1 border border-bg-gray-200 rounded-sm ">
                                    {{ $goals->where('id', $quizGoal->goal_id)->first()->name }}
                                </div>
                            @endif
                        @endforeach
                    </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
