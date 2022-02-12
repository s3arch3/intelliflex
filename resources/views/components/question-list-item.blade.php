<div class="bg-white rounded-md">
    <li class=" m-2">
        <div class="flex items-center space-x-2">
            {{-- <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                    alt="">
            </div> --}}
            <div class="flex-1 min-w-0 px-4">
                <a href="" class="hover:underline text-sm font-medium text-gray-700 truncate">
                    {{ 'Question #' . $index . ' ' . $question }}
                </a>
                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                    {{ $explanation }}
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900 pr-4">
                Active?:
                [{{ $isActive }}]

                <x-jet-button class="ml-4">
                    <a href="{{ route('questions.edit', $id) }}">
                        {{ __('Edit') }}
                    </a>
                </x-jet-button>
                <form method="POST" action="{{ route('questions.destroy', $id) }}">
                    @csrf
                    @method('DELETE')
                    <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                        <input class="text-medium" type="submit" value="DELETE">
                    </x-jet-button>
                </form>
            </div>

    </li>
    <div class="bg-white text-gray-700 rounded-b-md text-sm p-4">
        @foreach ($answers as $answer)
            {{-- {{ $answer }} --}}
            <h1 @if ($answer->is_checked == '1') class="bg-green-200 font-semibold p-2 rounded-md mb-2 text-gray-900" @endif>
                @switch($loop->index)
                    @case(0) A. @break
                    @case(1) B. @break
                    @case(2) C. @break
                    @case(3) D. @break
                    @default
                @break
            @endswitch

            "{{ $answer->answer }}" |||

            <span @if ($answer->is_checked == '1') class="bg-green-200 text-gray-900" @endif>
                Explanation: "{{ $answer->explanation }}"
                {{-- Correct?: @if ($answer->is_checked == '1') "YES" @else "NO" @endif --}}
            </span>
            </h1>

            @endforeach
        </div>
    </div>
