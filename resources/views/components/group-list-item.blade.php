{{-- THIS CODE IS A TEMPLATE FOR ALL THE GROUPS CREATED --}}
<div class="p-4">
    <div class="flow-root">
        <div class="flex flex-grow justify-between space-x-2">
            {{-- GROUP DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img src="{{ asset('assets/illustrations/group-logo.png') }}" class="mb-2 mx-auto w-10" alt="">
            </div>

            {{-- QUIZ MAIN DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE GROUP --}}
                <div><a href={{ route('groups.show', $groupProfessorID) }}
                        class="font-display hover:underline text-md font-bold text-blue-800 mr-2">
                        {{ $name }}
                    </a></div>
                {{-- ACTIVE/INACTIVE INDICATOR --}}
                <div>
                    @if ($isActive == 1)
                        <span
                            class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2">
                            Active
                        </span>
                    @elseif ($isActive == 0)
                        <span
                            class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2">
                            Inactive
                        </span>
                    @endif
                </div>
                {{-- DESCRIPTION OF THE GROUP --}}
                <p class="text-sm text-gray-600">
                    {{ $description }}
                </p>

                {{-- IF PROFESSOR, SHOW CODE FOR GROUP INVITATION --}}
                @if ($userType == 'professor')
                    Invite students using the code:
                    <span onclick="setClipboard('{{ $code }}')"
                        class="font-bold text-blue-800 cursor-pointer hover:underline">
                        {{ $code }}.
                    </span>

                    {{-- SCRIPT FOR THE COPY COMMAND --}}
                    <script type="application/javascript">
                        function setClipboard(value) {
                            var tempInput = document.createElement("input");
                            tempInput.style = "position: absolute; left: -1000px; top: -1000px";
                            tempInput.value = value;
                            document.body.appendChild(tempInput);
                            tempInput.select();
                            document.execCommand("copy");
                            document.body.removeChild(tempInput);
                            alert("Copied group code " + value);
                        }
                    </script>
                @endif
            </div>
        </div>
        {{-- QUIZ CONTROLS: EDIT, TAKE, DELETE --}}
        <div class="flex justify-end items-center text-base font-semibold text-gray-900 px-4 py-2">
            {{-- CHANGE DISPLAY BUTTONS FOR STUDENT --}}
            @if ($userType == 'student')
                {{-- STUDENT LEAVE GROUP BUTTON --}}
                <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $groupStudentID]) }}">
                    @csrf
                    <x-jet-button class="ml-2 bg-red-500 hover:bg-red-300">
                        <input class="font-semibold" type="submit" value="LEAVE GROUP">
                    </x-jet-button>
                </form>
                {{-- CHANGE DISPLAY BUTTONS FOR PROFESSOR --}}
            @elseif ($userType == 'professor')
                {{-- PROFESSOR EDIT GROUP BUTTON --}}
                <a href="{{ route('groups.edit', $groupProfessorID) }}"
                    class="font-semibold text-sm text-blue-800 px-4 hover:text-blue-300">
                    {{ __('EDIT') }}
                </a>

                {{-- PROFESSOR DELETE GROUP BUTTON --}}
                <form method="POST" action="{{ route('groups.destroy', $groupProfessorID) }}"
                    class="font-semibold text-sm text-red-500 px-4 hover:text-red-300">
                    @csrf
                    @method('DELETE')
                    <input class="font-semibold" type="submit" value="DELETE">
                </form>
            @endif
        </div>
    </div>
</div>
