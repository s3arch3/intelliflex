<div class="bg-slate-100 rounded-md mt-4">
    <li class="py-3 sm:py-4 px-4 list-none">
        <div class="flex justify-between items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                    alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href={{ route('log', $id) }} class="hover:underline text-sm font-bold text-blue-800 truncate">
                    {{ $name . ' (ID ' . $id . ')' }}
                </a>
                <p class="text-sm text-gray-600 truncate">
                    {{ $description }}
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                Questions Count:
                [{{ $questionsCount }}]
                Score:
                [{{ $score }}]
                Completed?:
                [{{ $isCompleted }}]

            </div>
        </div>
    </li>
</div>
