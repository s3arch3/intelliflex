<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Join Group') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="block p-10 bg-white rounded-md shadow-sm overflow-hidden">
                <div class="flex flex-col items-center text-center ">
                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- IMPORTANT --}}
                    {{-- enclose livewire stuff in a div --}}
                    <img src="{{ asset('assets/illustrations/confetti.png') }}" class="w-10 h-10 mb-4" alt="">
                    <p class="font-display font-semibold text-4xl text-gray-800">Do you want to join </p>
                    {{-- ID: {{ $quizID }} --}}
                    <div class="mb-6 font-display text-4xl inline-flex">
                        <p class="font-bold text-blue-600"> GROUP NAME HERE </p>
                        <p class="ml-2 font-semibold text-gray-800"> (CODE: {{ $groupCode }})
                    </div>

                    <div class="mb-2 text-gray-800">
                        <p class="mb-2 text-lg font-semibold">Professor: </p>
                        <p class="
                           mb-4 text-4xl font-bold">
                            Mr. Michael Tan
                    </div>

                    <div class="mb-2">
                        <b>Number of Students: </b> 5
                    </div>
                    <div class="mb-2">
                        <b>Quizzes: </b> Introduction to Computing
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('confirmJoin', ['groupCode' => $groupCode]) }}">
                @csrf
                <x-jet-button class="ml-4">
                    <input class="font-semibold" type="submit" value="JOIN GROUP">
                </x-jet-button>
            </form>

            {{-- BACK TO HOME --}}
            <x-jet-button class="ml-2">
                <a href="{{ route('groups.index') }}">
                    DECLINE
                </a>
            </x-jet-button>
        </div>
    </div>
</x-app-layout>
