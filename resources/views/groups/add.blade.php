<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Quiz') }}
        </h2>
    </x-slot>

    GROUP ID: {{ $groupID }}

    <br>
    List quiz here
    - radiobutton
    <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
        @foreach ($quizzes as $quiz)
            <div class="bg-white rounded-md border shadow-sm px-4 py-4 mb-2">
                {{ $quiz->name }}
                <br>
                {{ $quiz->description }}
                <br>
                {{ $quiz->questions_count }} questions
                <br>
                {{-- action="{{ route('addQuizToGroup', $quiz->id , $group_id) }}"> --}}
                <form method="POST"
                    action="{{ route('addQuizToGroup', ['quizID' => $quiz->id , 'groupID' => $groupID]) }}">
                    @csrf
                    @method("PUT")
                    <x-jet-button class="ml-4">
                        <input class="font-semibold" type="submit" value="ADD QUIZ">
                    </x-jet-button>
                </form>
            </div>
            <br>
        @endforeach
    </ul>

    <br>
    cancel

</x-app-layout>
