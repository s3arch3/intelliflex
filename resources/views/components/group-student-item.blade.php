{{-- THIS SECTION IS FOR GROUP STUDENTS FOR PROFESSORS, CLASSMATES FOR STUDENTS --}}
<div class="bg-white rounded-md border shadow-sm px-4 py-4 mb-2">
    <div class="flow-root">
        <div class="flex justify-between items-center space-x-2">
            {{-- STUDENT DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img class="w-12 rounded-full" src="{{ asset('assets/illustrations/student.png') }}" alt="">
            </div>

            {{-- STUDENT DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE STUDENT --}}
                <p class="font-display text-md font-bold text-blue-800 truncate">
                    @if ($myID == $studentIDinUser)
                        {{ $name . ' (YOU)' }}
                    @else
                        {{ $name }}
                    @endif
                </p>

                {{-- TOTAL POINTS CONTRIBUTED --}}
                A total of
                <span class="font-bold text-blue-800">
                    {{ $totalQuizPoints }}
                </span>
                points.
            </div>

            {{-- BUTTON CONDITIONALS BASED ON user_type --}}
            @if ($userType == 'professor')
                {{-- REMOVE STUDENT BUTTON ON PROFESSOR VIEW --}}
                <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $studentIDinGroup]) }}">
                    @csrf
                    <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="REMOVE STUDENT">
                    </x-jet-button>
                </form>
            @elseif ($userType == 'student')
            @endif
        </div>
    </div>
</div>
