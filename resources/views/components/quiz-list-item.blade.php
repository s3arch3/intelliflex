{{-- THIS CODE IS A TEMPLATE FOR ALL THE QUIZZES CREATED --}}
{{-- FLOWBITE JAVASCRIPT FOR DROPDOWN MENU --}}
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
<div class="p-4 mb-2">
    <div class="flow-root">
        <div class="flex flex-grow justify-between space-x-2">
            {{-- QUIZ DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img src="{{ asset('assets/illustrations/home/quiz-count.png') }}" class="w-12 rounded-full" alt="">
            </div>

            {{-- QUIZ MAIN DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE QUIZ --}}
                <div><a href={{ route('quizzes.show', $id) }}
                        class="font-display hover:underline text-md font-bold text-blue-800 mr-2">
                        {{ $name }}
                    </a>
                </div>
                {{-- ACTIVE/INACTIVE INDICATOR --}}
                <div>
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
                </div>
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
        </div>
        {{-- QUIZ CONTROLS: EDIT, TAKE, DELETE --}}
        {{-- NOT YET DONE NEEDS SOME FIX --}}
        <!-- DROPDOWN MENU-->
        {{-- <div class="">
                <button id="dropdownButton" data-dropdown-toggle="dropdown"
                    class="sm:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4  focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </button>
                <div id="dropdown"
                    class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1" aria-labelledby="dropdownButton">
                        <li> --}}
        {{-- Edit button --}}
        {{-- <a href="{{ route('quizzes.edit', $id) }}"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                {{ __('Edit') }}
                            </a>
                        </li>
                        <li> --}}
        {{-- Take button --}}
        {{-- <form method="POST" action="{{ route('take', $id) }}">
                                @csrf
                                <input type="submit" value="Take"
                                    class="block py-2 w-44 text-left px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            </form>
                        </li>
                        <li> --}}
        {{-- Delete button --}}
        {{-- <form method="POST" action="{{ route('quizzes.destroy', $id) }}">
                                @csrf
                                @method('DELETE')
                                <input
                                class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100
                                    dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                    type="submit" value="Delete">
                            </form>
                        </li>
                    </ul>
                </div>
            </div> --}}

        <div class="flex justify-end pt-4">
            {{-- BUTTON GROUP --}}
            <div class="inline-flex" role="group">
                {{-- EDIT BUTTON --}}
                <a href="{{ route('quizzes.edit', $id) }}"
                    class=" font-semibold text-xs
                            text-blue-800 px-4 hover:text-blue-600 py-2 bg-white rounded-l-lg border border-gray-200
                            hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700">
                    {{ __('EDIT') }}
                </a>
                {{-- TAKE BUTTON --}}
                <form method="POST" action="{{ route('take', $id) }}">
                    @csrf
                    <input
                        class="font-semibold text-xs text-blue-800 px-4 hover:text-blue-600 py-2 bg-white border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700"
                        type="submit" value="TAKE">
                </form>

                {{-- DELETE BUTTON --}}
                <form method="POST" action="{{ route('quizzes.destroy', $id) }}"
                    class="font-semibold text-xs text-red-500 px-4 hover:text-red-400 py-2 bg-white rounded-r-lg border-t border-b border-r border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-red-400 focus:text-red-500">
                    @csrf
                    @method('DELETE')

                    <input class="font-semibold" type="submit" value="DELETE">

                </form>
            </div>
        </div>
    </div>
</div>
