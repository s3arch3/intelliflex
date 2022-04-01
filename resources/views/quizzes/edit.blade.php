<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Quiz') }}
        </h2>
    </x-slot>
    <div class="py-4 px-4">
        <x-jet-button>
            <a href="{{ route('quizzes.index') }}">
                GO BACK
            </a>
        </x-jet-button>
        {{-- QUIZ DETAIL ITEM --}}
        <x-quiz-detail-item :quizName="$quizItem->name" :quizDescription="$quizItem->description"
            :isActive="$quizItem->is_active" />
        {{-- BACK TO QUIZZES LIST --}}
        <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- FORM FOR QUIZ EDITION --}}
            <div class="block p-10 bg-white rounded-md shadow-sm">
                <form method="POST" action="{{ route('quizzes.update', $quizItem->id) }}">
                    @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                    @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}

                    {{-- QUIZ NAME --}}
                    <div>
                        <label for="name"
                            class="font-display text-xl font-bold after:content-['*'] after:ml-0.5 after:text-red-500 text-blue-800">Edit
                            Quiz Name</label>
                        <input id="name" name="quiz[name]" type="text" value="{{ $quizItem->name }}"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    {{-- QUIZ DESCRIPTION --}}
                    <div>
                        <label for="description" class="font-display mb-4 mt-4 text-xl font-bold text-blue-800">Edit
                            Quiz Description</label>
                        <input id="description" name="quiz[description]" value="{{ $quizItem->description }}"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                            border-gray-300 focus:ring-blue-500 focus:border-blue-500">

                    </div>
                    {{-- QUIZ ACTIVE CHECKBOX --}}
                    <div class="flex items-center mb-4">
                        <input id="is_active" name="quiz[is_active]" type="checkbox"
                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                            @if ($quizItem->is_active === '1') checked="checked" @endif>
                        <label for="is_active" class="ml-3 text-sm font-medium text-gray-900">Set Active Status</label>
                    </div>
                    {{-- UPLOAD ICON BUTTON --}}
                    {{-- <div class=" flex items-center mb-4">
                        <div> <svg xmlns=" http://www.w3.org/2000/svg"
                                class="h-12 w-12 p-2 bg-slate-100 rounded-full mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="rgb(30 58 138)">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <a href="#" class="text-blue-900 font-semibold text-sm hover:underline"> Upload Icon</a>
                    </div> --}}

                    {{-- FINISH EDITING BUTTON --}}
                    <x-jet-button>
                        <input type="submit" class="font-semibold" value="FINISH EDITING">
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
