<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Welcome to goals section.
                <hr>
                </hr>
                <br>
                <br>
                These are the available goals
                {{-- list all goals here --}}
                <div class="flex justify-items-center">
                    @foreach ($goals as $goal)
                        <div
                            class="w-80  text-center my-2 bg-slate-200 outline outline-offset-2 outline-1 outline-yellow-500 rounded-3xl">
                            NAME: <b> {{ $goal->name }} </b>
                            <br>
                            DESC: <b> {{ $goal->description }} </b>
                            <br>
                            REQ: <b> {{ $goal->requirement }} </b>
                            <br>
                        </div>
                    @endforeach
                </div>
                These are list of quizzes and their achieved goals:
                {{-- list all quizzes here and goal progress --}}

            </div>
        </div>
    </div>
</x-app-layout>
