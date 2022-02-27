<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group Details') }}
        </h2>
    </x-slot>
    <div class="block px-24 py-4 bg-yellow-400 rounded-md shadow-sm mx-auto">
        <form class="text-md leading-relaxed font-semibold text-gray-00">
            <label>GROUP ID: {{ $groupProfessorItem->id }}</label> <br>
            <label>GROUP NAME: {{ $groupProfessorItem->name }}</label> <br>
            <label>GROUP DESC: {{ $groupProfessorItem->description }}</label> <br>
            <label>GROUP CODE: {{ $groupProfessorItem->code }}</label> <br>
            <label>ACTIVE: @if ($groupProfessorItem->is_active === '1')
                YES @else NO
                @endif</label> <br>
        </form>
    </div>


    @if ($userType == 'student')
        STUDENT INTERFACE
        <br>
        <br>


    @elseif ($userType == 'professor')
        PROFESSOR INTERFACE
        <br>
        <br>

        {{-- QUIZZES LIST --}}
        {{-- QUIZZES LIST --}}
        {{-- QUIZZES LIST --}}
        <div class="block p-10 bg-white rounded-md shadow-sm">

            <x-jet-button>
                <a href="{{ route('quizzes.index') }}">
                    {{ __('ADD QUIZ') }}
                </a>
            </x-jet-button>
            <br>
            <br>

            {{-- <label for="studentList"
                class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Quizzes List</label>
            @foreach ($groupStudents as $groupStudent)
                <div class="text-md leading-relaxed font-semibold text-gray-00 border-gray-500">
                    <label>STUDENT ID: {{ $groupStudent->user_id }}</label> <br>
                    <label>STUDENT NAME: {{ $groupStudent->user->name }}</label> <br>
                </div>
                <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $groupStudent->id]) }}">
                    @csrf
                    <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="REMOVE STUDENT">
                    </x-jet-button>
                </form>
                <br>
            @endforeach --}}
        </div>

        <br>
        <br>

        {{-- STUDENT LIST --}}
        {{-- STUDENT LIST --}}
        {{-- STUDENT LIST --}}
        <div class="block p-10 bg-white rounded-md shadow-sm">
            <label for="studentList"
                class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Student
                List</label>
            @foreach ($groupStudents as $groupStudent)
                <div class="text-md leading-relaxed font-semibold text-gray-00 border-gray-500">
                    <label>STUDENT ID: {{ $groupStudent->user_id }}</label> <br>
                    <label>STUDENT NAME: {{ $groupStudent->user->name }}</label> <br>
                </div>
                <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $groupStudent->id]) }}">
                    @csrf
                    <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="REMOVE STUDENT">
                    </x-jet-button>
                </form>
                <br>
            @endforeach
        </div>
    @elseif ($userType == 'admin')
        ADMIN INTERFACE
        <br>
        <br>

    @endif

</x-app-layout>
