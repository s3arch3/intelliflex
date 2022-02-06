<div class="bg-white rounded-md  ">
    <li class="py-3 sm:py-4 px-4">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                    alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href={{ route('quizzes.show', $id) }} class="underline text-sm font-bold text-blue-800 truncate">
                    {{ $name . ' (ID ' . $id . ')' }}
                </a>
                <p class="text-sm text-gray-600 truncate">
                    {{ $description }}
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                Questions Count:
                [{{ $questionsCount }}]
                Times Completed:
                [{{ $timesCompleted }}]
                Active?:
                [{{ $isActive }}]
                <x-jet-button class="ml-4">
                    <a href="{{ route('quizzes.edit', $id) }}">
                        {{ __('Edit') }}
                    </a>
                </x-jet-button>

                <form method="POST" action="{{ route('take', $id) }}">
                    @csrf
                    <x-jet-button class="ml-4">
                        <input class="font-semibold " type="submit" value="TAKE">
                    </x-jet-button>
                </form>

                <form method="POST" action="{{ route('quizzes.destroy', $id) }}">
                    @csrf
                    @method('DELETE')
                    <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="DELETE">
                    </x-jet-button>
                </form>
            </div>
        </div>
    </li>
</div>
