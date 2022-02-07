<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Quiz') }}
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

            {{-- FORM FOR QUIZ EDITION --}}
            <div class="block p-10 bg-white rounded-md shadow-sm">
                <form method="POST" action="{{ route('quizzes.update', $quizItem->id) }}">
                    @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                    @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}
                    <div>
                        <label for="name"
                            class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Edit
                            the quiz name, Sir?</label>
                        <input id="name" name="quiz[name]" type="text" value="{{ $quizItem->name }}"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="description" class=" mb-4 mt-4 text-xl font-medium text-gray-900">Edit the
                            Description,
                            Sir?</label>
                        <input id="description" name="quiz[description]" value="{{ $quizItem->description }}"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </input>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="is_active" aria-describedby="quiz[is_active]" type="checkbox"
                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                            @if ($quizItem->is_active === '1') checked="checked" @endif>
                        <label for="is_active" class="ml-3 text-sm font-medium text-gray-900">Is Your Quiz
                            Still Active, Sir?</label>
                    </div>
                    <x-jet-button>
                        <input type="submit" class="font-semibold" value="FINISH EDITING">
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
