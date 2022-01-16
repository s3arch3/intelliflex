<div>
    <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full"
                    src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                    alt="Neil image">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                    {{ $quiz_name }}
                </p>
                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                    {{ $quiz_description }}
                </p>
            </div>
            <div
                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                {{ $times_completed }}
            </div>
        </div>
    </li>
</div>
