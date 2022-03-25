{{-- THIS CODE IS A TEMPLATE FOR ALL THE GROUPS CREATED --}}
<div class="bg-white rounded-md border shadow-sm px-4 py-4 mb-2">
    <div class="flow-root">
        <div class="flex justify-between items-center space-x-2">
            {{-- GROUP DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img class="w-12" src="{{ asset('assets/illustrations/group-logo.png') }}" alt="">
            </div>

            {{-- QUIZ MAIN DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE GROUP --}}
                <a href={{ route('groups.show', $groupProfessorID) }}
                    class="font-display hover:underline text-md font-bold text-blue-800 truncate ">
                    {{ $name }}
                </a>

                {{-- ACTIVE/INACTIVE INDICATOR --}}
                @if ($isActive == 1)
                    <span
                        class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2 mx-2">
                        Active
                    </span>
                @elseif ($isActive == 0)
                    <span
                        class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2 mx-2">
                        Inactive
                    </span>
                @endif

                {{-- DESCRIPTION OF THE GROUP --}}
                <p class=" text-sm text-gray-600">
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

            {{-- QUIZ CONTROLS: EDIT, TAKE, DELETE --}}
            <div class="relative inline-flex text-base font-semibold text-gray-900 ">
                {{-- CHANGE DISPLAY BUTTONS FOR STUDENT --}}
                @if ($userType == 'student')
                    {{-- STUDENT LEAVE GROUP BUTTON --}}
                    <form method="POST" action="{{ route('removeStudent', ['groupStudentID' => $groupStudentID]) }}">
                        @csrf
                        <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                            <input class="font-semibold" type="submit" value="LEAVE GROUP">
                        </x-jet-button>
                    </form>
                    {{-- CHANGE DISPLAY BUTTONS FOR PROFESSOR --}}
                @elseif ($userType == 'professor')
                    {{-- PROFESSOR EDIT GROUP BUTTON --}}
                    <x-jet-button class="ml-4">
                        <a href="{{ route('groups.edit', $groupProfessorID) }}">
                            {{ __('Edit') }}
                        </a>
                    </x-jet-button>

                    {{-- PROFESSOR DELETE GROUP BUTTON --}}
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
    </div>
</div>
