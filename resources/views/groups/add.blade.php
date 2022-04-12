<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Quiz') }}
        </h2>
    </x-slot>
    <div class="py-4 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <p class="font-semibold font-display text-3xl mt-4 text-left mb-2">
                    Group ID: {{ $groupID }}
                </p>
                <p class="text-sm">Manage all your quizzes here.</p>
            </div>
            <ul role="list" class="bg-white divide-y divide-slate-100 rounded-md shadow-sm">
                @foreach ($quizzes as $quiz)
                    <div class="px-4 py-4">
                        <p class="items-center font-semibold text-blue-700">{{ $quiz->name }}
                        </p>
                        <p
                            class="inline-flex items-center bg-blue-50 border border-blue-300 px-2 rounded text-blue-600 font-semibold text-sm w-auto my-2 lg:ml-2">
                            {{ $quiz->questions_count }} questions
                        </p>
                        <p class="text-sm text-gray-800 mb-2">
                            {{ $quiz->description }}
                        </p>
                        {{-- action="{{ route('addQuizToGroup', $quiz->id , $group_id) }}"> --}}
                        <form method="POST" class="flex justify-end"
                            action="{{ route('addQuizToGroup', ['quizID' => $quiz->id, 'groupID' => $groupID]) }}">
                            @csrf
                            @method("PUT")
                            <div
                                class="inline-flex items-center text-xs text-blue-700 px-4 hover:text-blue-600 py-2 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <input type="submit" value="ADD QUIZ" class="font-semibold">
                            </div>
                        </form>
                    </div>
                @endforeach
            </ul>
            <div class="flex justify-end px-4">
                <x-jet-button>
                    <a href="">cancel
                    </a>
                </x-jet-button>
            </div>
        </div>
    </div>
</x-app-layout>
