<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Group') }}
        </h2>
    </x-slot>

    {{-- BACK TO QUIZZES LIST --}}
    <div class="py-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-button>
                <a href="{{ route('groups.index') }}">
                    GO BACK
                </a>
            </x-jet-button>

            {{-- FORM FOR GROUP CREATION --}}
            <div class="block p-10 bg-white rounded-md shadow-sm">
                <form method="POST" action="{{ route('groups.store') }}">
                    @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                    <label for="groupCode"
                        class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Group Code</label>
                    <div class="flex">
                        <input
                            id="groupCode"
                            name="quiz[name]"
                            type="text"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            value="KTCO9000"
                            disabled>
                        </input>
                        <x-jet-button>
                            COPY CODE
                        </x-jet-button>
                    </div>
                    <div>
                        <label for="name"
                            class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Group Name</label>
                        <input id="name" name="quiz[name]" type="text"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Please provide a name for your quiz."></input>
                    </div>
                    <div>
                        <label for="description" class="text-xl font-medium text-gray-900">Group Description</label>
                        <textarea
                            id="description" name="quiz[description]" rows="4"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Please provide a description for your quiz.">
                        </textarea>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="is_active" aria-describedby="quiz[is_active]" type="checkbox"
                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300">
                        <label for="is_active" class="ml-3 text-sm font-medium text-gray-900">Active?</label>
                    </div>

                    <x-jet-button>
                        <input type="submit" class="font-semibold" value="CREATE GROUP">
                    </x-jet-button>

                    <x-jet-button>
                        <a href="{{ route('groups.index') }}">
                            CANCEL
                        </a>
                    </x-jet-button>
                </form>
            </div>

</x-app-layout>
