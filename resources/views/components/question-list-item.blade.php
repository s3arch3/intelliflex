<div class="bg-gray-900">
    <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                    alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href="" class="underline text-sm font-medium text-yellow truncate dark:text-yellow-500">
                    {{ 'Question #' . $index . ' ' . $question }}
                </a>
                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                    {{ $explanation }}
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                Active?:
                [{{ $isActive }}]

                <x-jet-button class="ml-4">
                    <a href="">
                        {{ __('Edit') }}
                    </a>
                </x-jet-button>

                <form method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <x-jet-button class="ml-4">
                        <input type="submit" value="Delete">
                    </x-jet-button>
                </form>
            </div>
        </div>
    </li>
</div>

<div class=" bg-orange-300 my-4">
@foreach ($answers as $answer)
        {{-- {{ $answer }} --}}
        <h1 @if ($answer->is_checked == "1") class="bg-green-500" @endif>
            @switch($loop->index)
                @case(0) A. @break
                @case(1) B. @break
                @case(2) C. @break
                @case(3) D. @break
                @default
                    @break
            @endswitch

             "{{ $answer->answer }}" |||

             <span @if ($answer->is_checked == "1") class="bg-green-500" @endif>
                 Explanation: "{{ $answer->explanation }}"
                 {{-- Correct?: @if ($answer->is_checked == "1") "YES" @else "NO" @endif --}}
             </span>
        </h1>

    @endforeach
</div>