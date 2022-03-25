<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Take Quiz') }}
        </h2>
    </x-slot> --}}

    @livewire('quiz-livewire', [
    'quizID' => $quizID,
    'groupProfessorID' => $groupProfessorID,
    'groupQuizID' => $groupQuizID
    ])

</x-app-layout>
