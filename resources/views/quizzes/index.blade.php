<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizzes') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Welcome to quizzes section.
                {{-- <x-jet-welcome /> --}}
                <!-- This is an example component -->
                <div class="max-w-2xl mx-auto">
                    <div
                        class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers
                            </h3>
                            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                View all
                            </a>
                        </div>
                        <div class="flow-root">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                                                alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Neil Sims
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@windster.com
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $320
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
