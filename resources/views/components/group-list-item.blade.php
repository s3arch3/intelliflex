{{-- THIS CODE IS A TEMPLATE FOR ALL THE GROUPS CREATED --}}
<div class="p-4">
    <div class="flow-root">
        <div class="flex flex-grow justify-between space-x-2">
            {{-- GROUP DEFAULT LOGO --}}
            <div class="flex-shrink-0">
                <img src="{{ asset('assets/illustrations/home/groups.png') }}" class="mb-2 mx-auto w-10" alt="">
            </div>

            {{-- QUIZ MAIN DETAILS --}}
            <div class="flex-1 px-4">
                {{-- NAME OF THE GROUP --}}
                <a href={{ route('groups.show', $groupProfessorID) }}
                    class="font-display hover:underline text-md font-bold text-blue-800 mr-2">
                    {{ $name }}
                </a>
                {{-- ACTIVE/INACTIVE INDICATOR --}}
                <span>
                    @if ($isActive == 1)
                        <span
                            class="inline-flex items-center bg-emerald-50 border border-emerald-300 px-2 rounded text-emerald-500 font-semibold text-sm w-28 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>ACTIVE
                        </span>
                    @elseif ($isActive == 0)
                        <span
                            class="inline-flex items-center bg-amber-50 border border-amber-300 px-2 rounded text-amber-500 font-semibold text-sm w-28 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd" />
                            </svg>INACTIVE
                        </span>
                    @endif
                </span>
                <ul class="pt-2 mt-2 space-y-2 border-t border-gray-200">
                    {{-- DESCRIPTION OF THE GROUP --}}
                    <p class="text-sm text-gray-600">
                        {{ $description }}
                    </p>
                    <div class="flex-auto items-center lg:flex md:flex text-blue-800 text-sm">
                        {{-- IF PROFESSOR, SHOW CODE FOR GROUP INVITATION --}}
                        @if ($userType == 'professor')
                            Invite students using the code:
                            <div class="inline-flex items-center" role="group">
                                <span
                                    class="font-bold ml-0 mt-1 lg:mt-0 md:mt-0 lg:ml-2 md:ml-2 p-1 px-2 border-t border-b border-l bg-sky-50 rounded-l-md text-sm">
                                    {{ $code }}
                                </span>
                                {{-- CLIPBOARD ICON --}}
                                <div class="
                                border bg-sky-50 rounded-r-lg mt-1 lg:mt-0 md:mt-0 p-1 hover:bg-blue-600 hover:text-white cursor-pointer"
                                    onclick="setClipboard('{{ $code }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                            </div>
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
        </div>
        {{-- QUIZ CONTROLS: EDIT, TAKE, DELETE --}}
        <div class="flex justify-end p-4">
            <div class="inline-flex rounded-md" role="group">
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
                        class="font-semibold text-xs text-blue-800 px-4 hover:text-blue-600 py-2 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700">
                        {{ __('EDIT') }}
                    </a>

                    {{-- PROFESSOR DELETE GROUP BUTTON --}}
                    <form method="POST" action="{{ route('groups.destroy', $groupProfessorID) }}"
                        class="font-semibold text-xs text-red-500 px-4 hover:text-red-400 py-2 bg-white rounded-r-lg border-t border-b border-r border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-red-400 focus:text-red-500">
                        @csrf
                        @method('DELETE')
                        <input class="font-semibold" type="submit" value="DELETE">
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
