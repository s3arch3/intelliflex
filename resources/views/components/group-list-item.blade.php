<div class="bg-white rounded-md">
    <li class="py-3 sm:py-4 px-4">
        <div class="flex justify-between items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="{{ asset('assets/illustrations/quiz-logo.png') }}"
                    alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href={{ route('groups.show', $groupProfessorID) }}
                    class="hover:underline text-sm font-bold text-blue-800 truncate">
                    {{ $name . ' (ID ' . $groupProfessorID . ')' }}
                </a>
                <p class="text-sm text-gray-600 truncate">
                    {{ $description }}
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                Code:
                [{{ $code }}]
                Active?:
                [{{ $isActive }}]
                {{-- [{{ $userType }}] --}}

                @if ($userType == 'student')
                    {{-- CHANGE DISPLAY BUTTONS FOR STUDENT --}}
                    {{-- CHANGE DISPLAY BUTTONS FOR STUDENT --}}
                    {{-- CHANGE DISPLAY BUTTONS FOR STUDENT --}}
                    <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $groupStudentID]) }}">
                        @csrf
                        {{-- @method('DELETE') --}}
                        <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                            <input class="font-semibold" type="submit" value="LEAVE GROUP">
                        </x-jet-button>
                    </form>
                @elseif ($userType == 'professor')
                    {{-- CHANGE DISPLAY BUTTONS FOR PROFESSOR --}}
                    {{-- CHANGE DISPLAY BUTTONS FOR PROFESSOR --}}
                    {{-- CHANGE DISPLAY BUTTONS FOR PROFESSOR --}}
                    <x-jet-button class="ml-4">
                        <a href="{{ route('groups.edit', $groupProfessorID) }}">
                            {{ __('Edit') }}
                        </a>
                    </x-jet-button>

                    <form method="POST" action="{{ route('groups.destroy', $groupProfessorID) }}">
                        @csrf
                        @method('DELETE')
                        <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                            <input class="font-semibold" type="submit" value="DELETE">
                        </x-jet-button>
                    </form>
                @endif

            </div>
        </div>
    </li>
</div>
