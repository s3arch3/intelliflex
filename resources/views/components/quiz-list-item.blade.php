<div class="bg-gray-900">
    <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                    alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href={{ route('quizzes.show', $id) }} class="underline text-sm font-medium text-yellow truncate dark:text-yellow-500">
                    {{ $name." (ID ".$id.")" }}
                </a>
                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                    {{ $description }}
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
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

                <form method="POST" action="{{ route('quizzes.destroy', $id) }}">
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
