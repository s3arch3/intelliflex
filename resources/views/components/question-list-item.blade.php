<div class="bg-white rounded-md shadow-md">
    <div class="flow-root">
        {{-- QUESTION AND EXPLANATION SECTION --}}
        <div class="items-center space-x-2 mt-4">
            {{-- QUESTION NUMBER AND QUESTION --}}
            <div class="px-4 hover:underline font-medium text-gray-700">
                <a href="{{ route('questions.edit', $id) }}">
                    {{-- ACTIVE/INACTIVE INDICATOR --}}
                    @if ($isActive == 1)
                    <span
                        class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm mt-2 mr-2">
                        Active
                    </span>
                    @elseif ($isActive == 0)
                        <span
                            class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm mt-2 mr-2">
                            Inactive
                        </span>
                    @endif

                    {{-- QUESTION#: --}}
                    <span class="font-bold text-blue-800">
                        {{ 'Question #' . $index . ': ' }}
                    </span>

                    {{-- THE ACTUAL QUESTION --}}
                    {{ $question }}
                </a>
            </div>

            {{-- QUESTION EXPLANATION --}}
            @if ($explanation != NULL)
                <p class="px-2 text-gray-500 truncate dark:text-gray-400">
                    <span class="font-bold text-blue-800">
                        {{ 'Explanation: ' }}
                    </span>
                    {{ $explanation }}
                </p>
            @else
                {{-- NO EXPLANATION --}}
            @endif
        </div>

        {{-- ANSWERS LIST --}}
        <div class="bg-white text-gray-700 rounded-b-md text-sm p-4">
            @foreach ($answers as $answer)
                <p
                    @if ($answer->is_checked == '1') class="border border-emerald-400 bg-emerald-50 font-semibold p-2 my-2 text-emerald-900" @endif>
                    @switch($loop->index)
                        @case(0)
                            A.
                        @break

                        @case(1)
                            B.
                        @break

                        @case(2)
                            C.
                        @break

                        @case(3)
                            D.
                        @break

                        @default
                        @break
                    @endswitch

                    {{-- THE ANSWER ITSELF --}}
                    <span class="font-bold text-blue-800">
                        {{ $answer->answer }}
                    </span>
                    <br>

                    {{-- THIS IS TO SHOW EXPLANATION SECTION TO THE CORRECT ANSWER --}}
                    @if ($answer->is_checked == '1')
                        Explanation: {{ $answer->explanation }}
                    @else
                        {{-- NO EXPLANAITION --}}
                    @endif
                </p>
            @endforeach
        </div>

        {{-- CONTROL BUTTONS --}}
        <div class="flex items-center text-base font-semibold text-gray-900">
            {{-- EDIT BUTTON --}}
            <x-jet-button class="ml-4">
                <a href="{{ route('questions.edit', $id) }}">
                    {{ __('EDIT') }}
                </a>
            </x-jet-button>

            {{-- DELETE BUTTON --}}
            <form method="POST" action="{{ route('questions.destroy', $id) }}">
                @csrf
                @method('DELETE')
                <x-jet-button class="ml-4">
                    <input class="text-medium" type="submit" value="DELETE">
                </x-jet-button>
            </form>
        </div>
    </div>
</div>
