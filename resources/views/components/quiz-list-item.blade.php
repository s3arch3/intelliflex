<div class="bg-white rounded-md border shadow-sm px-4 py-4 mb-2">
    <div class="flex justify-between items-center space-x-4">
        <div class="flow-root">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-12 rounded-full" src="{{ asset('assets/illustrations/quiz-logo.png') }}"
                        alt="">
                </div>
                <div class="flex-1 min-w-0">
                    <a href={{ route('quizzes.show', $id) }}
                        class="font-display hover:underline text-md font-bold text-blue-800 truncate ">
                        {{ $name }}
                    </a>
                    <p class="mb-2 text-sm text-gray-600 truncate">
                        {{ $description }}
                    </p>
                    Questions Count:
                    [{{ $questionsCount }}]
                    Times Completed:
                    [{{ $timesCompleted }}]
                    Active?:
                    [{{ $isActive }}]
                </div>
                <div class="relative inline-flex text-base font-semibold text-gray-900 ">
                    <x-jet-button class="ml-4">
                        <a href="{{ route('quizzes.edit', $id) }}">
                            {{ __('Edit') }}
                        </a>
                    </x-jet-button>

                    <form method="POST" action="{{ route('take', $id) }}">
                        @csrf
                        <x-jet-button class="ml-4">
                            <input class="font-semibold" type="submit" value="TAKE">
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
        </div>
    </div>
</div>
