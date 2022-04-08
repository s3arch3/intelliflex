<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Question') }}
        </h2>
    </x-slot>
    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="py-4 px-4 lg:px-0">
            {{-- BACK TO THAT QUIZ ITEM DETAILS --}}
            <x-jet-button>
                <a href="{{ route('quizzes.index') }}">
                    GO BACK
                </a>
            </x-jet-button>
            {{-- EDIT QUESTION FORM --}}
            <div class="block p-10 bg-white rounded-md shadow-sm">
                <form method="POST" action="{{ route('questions.update', $questionItem->id) }}">
                    @csrf {{-- Little csrf guy protecting us from cross site attacks <div --}}
                    @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}
                    <div class="mb-4">
                        <label for="quizID" class="text-sm font-normal">Editing question for Quiz
                            #{{ $questionItem->quiz_id }}</label>
                    </div>
                    <div>
                        <label for="question"
                            class="font-display text-md font-bold after:content-['*'] after:ml-0.5 after:text-red-500 text-blue-800">Question
                            name </label>
                        <input id="question" name="question[question]" type="text"
                            value="{{ $questionItem->question }}"
                            class="mb-4 mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="explanation"
                            class="font-display text-md font-bold after:content-['*'] after:ml-0.5 after:text-red-500 text-blue-800">Explanation
                            <span class="text-sm font-medium">(Will be used as a secret tool or hint
                                later.)</span></label>
                        <input id="explanation" name="question[explanation]" type="text"
                            value="{{ $questionItem->explanation }}"
                            class="mb-4 mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <input id=" is_active" name="question[is_active]" type="checkbox"
                        class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                        @if ($questionItem->is_active === '1') checked="checked" @endif>
                    <label for="is_active" class=" ml-2 text-sm font-medium text-gray-900">Set Active
                        Status</label>
            </div>
            <div class="py-8">
                <p class="font-display font-bold text-2xl mb-2">Choices
                </p>
                {{-- CHOICES --}}
                <div class="block p-10 bg-white rounded-md shadow-sm">
                    <div class="mb-4">
                        <input type="radio" id="answerA" name="question[is_selected]" value="A"
                            checked="{{ $questionItem->is_checked }}">
                        <label for="" class="font-display text-md font-bold text-blue-800">A
                        </label>
                        <input id="answerA" name="answers[0][answer]" type="text" placeholder="answer for letter A"
                            value="{{ $answers[0]['answer'] }}"
                            class="mb-2 mt-2 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        <input id="explanationA" name="answers[0][explanation]" type="text"
                            placeholder="explanation for letter A" value="{{ $answers[0]['explanation'] }}"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <input type="radio" id="answerB" name="question[is_selected]" value="B"
                            checked="{{ $questionItem->is_checked }}">
                        <label for="" class="font-display text-md font-bold text-blue-800">B
                        </label>
                        <input id="answerB" name="answers[1][answer]" type="text" placeholder="answer for letter B"
                            value="{{ $answers[1]['answer'] }}"
                            class="mb-2 mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        <input id="explanationB" name="answers[1][explanation]" type="text"
                            placeholder="explanation for letter B" value="{{ $answers[1]['explanation'] }}"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <input type="radio" id="answerC" name="question[is_selected]" value="C"
                            checked="{{ $questionItem->is_checked }}">
                        <label for="" class="font-display text-md font-bold text-blue-800">C
                        </label>
                        <input id="answerC" name="answers[2][answer]" type="text" placeholder="answer for letter C"
                            value="{{ $answers[2]['answer'] }}"
                            class="mb-2 mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        <input id="explanationC" name="answers[2][explanation]" type="text"
                            placeholder="explanation for letter C" value="{{ $answers[2]['explanation'] }}"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <input type="radio" id="answerD" name="question[is_selected]" value="D"
                            checked="{{ $questionItem->is_checked }}">
                        <label for="" class="font-display text-md font-bold text-blue-800">D
                        </label>
                        <input id="answerD" name="answers[3][answer]" type="text" placeholder="answer for letter D"
                            value="{{ $answers[3]['answer'] }}"
                            class="mb-2 mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        <input id="explanationD" name="answers[3][explanation]" type="text"
                            placeholder="explanation for letter D" value="{{ $answers[3]['explanation'] }}"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <x-jet-button>
                        <input type="submit" value="SAVE" class="text-md font-medium">
                    </x-jet-button>
                </div>
            </div>
        </div>
</x-app-layout>
