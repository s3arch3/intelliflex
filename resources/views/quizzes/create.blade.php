<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Quiz') }}
        </h2>
    </x-slot>

    {{-- BACK TO QUIZZES LIST --}}
    <div class="py-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-button>
                <a href="{{ route('quizzes.index') }}">
                    GO BACK
                </a>
            </x-jet-button>

            {{-- FORM FOR QUIZ CREATION --}}
            <div class="block p-10 bg-white rounded-md shadow-sm">
                <form method="POST" action="{{ route('quizzes.store') }}">
                    @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                    <div>
                        <label for="name"
                            class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">What's
                            the
                            Name
                            of Your Quiz, Sir?</label>
                        <input id="name" name="quiz[name]" type="text"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Please provide a name for your quiz."></input>
                    </div>
                    <div>
                        <label for="description" class="text-xl font-medium text-gray-900">Provide a Description,
                            Sir.</label>
                        <textarea id="description" name="quiz[description]" rows="4"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Please provide a description for your quiz.">
                        </textarea>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="is_active" aria-describedby="quiz[is_active]" type="checkbox"
                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300">
                        <label for="is_active" class="ml-3 text-sm font-medium text-gray-900">Is your quiz active,
                            Sir?</label>
                    </div>

                    <x-jet-button>
                        <input type="submit" class="font-semibold" value="DONE">
                    </x-jet-button>
                </form>
            </div>

</x-app-layout>
