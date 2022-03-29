{{-- THIS CODE IS A TEMPLATE FOR ALL THE QUIZZES CREATED --}}
<div class="bg-white rounded-md border shadow-sm px-4 py-4 mb-2">
    <div class="flow-root">
        <div class="flex justify-between items-center space-x-2">
            {{-- QUIZ DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img src="{{ asset('assets/illustrations/home/quiz-count.png') }}" class="mb-2 mx-auto w-10" alt="">
            </div>

            {{-- QUIZ MAIN DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE QUIZ --}}
                <a href={{ route('quizzes.show', $id) }}
                    class="font-display hover:underline text-md font-bold text-blue-800 truncate mr-2 ">
                    {{ $name }}
                </a>

                {{-- ACTIVE/INACTIVE INDICATOR --}}
                @if ($isActive == 1)
                    <span
                        class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2">
                        Active
                    </span>
                @elseif ($isActive == 0)
                    <span
                        class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2">
                        Inactive
                    </span>
                @endif
                {{-- DESCRIPTION OF THE QUIZ --}}
                <p class="text-sm text-gray-600 mt-2">
                    {{ $description }}
                </p>
                <div class="text-sm font-medium text-gray-700 mt-2">
                    {{-- QUESTION COUNT --}}
                    <span class="font-bold text-blue-800">
                        {{ $questionsCount }}
                    </span>
                    questions, completed
                    {{-- TIMES COMPLETED --}}
                    <span class="font-bold text-blue-800">
                        {{ $timesCompleted }}
                    </span>
                    times.
                </div>
            </div>

            {{-- QUIZ CONTROLS: EDIT, TAKE, DELETE --}}

            <!-- Dropdown menu -->

            <div class="relative inline-flex text-base font-semibold text-gray-900 ">
                {{-- EDIT BUTTON --}}
                <x-jet-button class="ml-4">
                    <a href="{{ route('quizzes.edit', $id) }}">
                        {{ __('Edit') }}
                    </a>
                </x-jet-button>

                {{-- TAKE BUTTON --}}
                <form method="POST" action="{{ route('take', $id) }}">
                    <x-jet-button class="ml-4">
                        @csrf
                        <input class="font-semibold" type="submit" value="TAKE">
                    </x-jet-button>
                </form>

                {{-- DELETE BUTTON --}}
                <form method="POST" action="{{ route('quizzes.destroy', $id) }}">
                    @csrf
                    @method('DELETE')
                    <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="DELETE">
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</div>
