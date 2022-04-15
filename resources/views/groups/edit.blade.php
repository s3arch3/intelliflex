<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Group') }}
        </h2>
    </x-slot>

    {{-- BACK TO GROUPS LIST --}}
    <div class="py-4 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-button>
                <a href="{{ route('groups.index') }}">
                    GO BACK
                </a>
            </x-jet-button>
            <div>

            </div>

            {{-- FORM FOR GROUP EDIT --}}
            {{-- FORM FOR GROUP EDIT --}}
            {{-- FORM FOR GROUP EDIT --}}
            <p class="font-semibold text-xl mb-4 sm:text-left lg:text-left md:text-left text-center">Group Details
            </p>
            <div class="block py-4 px-8 bg-white rounded-md shadow-sm mb-8">
                <form method="POST" action="{{ route('groups.update', $groupProfessorItem->id) }}">
                    @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                    @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}
                    <div>
                        <label for="groupCode"
                            class="text-sm font-semibold text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Group
                            Code
                        </label>
                        <div class="flex">
                            {{-- HIDDEN INPUT; NO NEED TO STYLE --}}
                            {{-- THIS INPUT IS PASSED ON JAVASCRIPT CODE BELOW --}}
                            <input id="groupCodeHidden" name="" type="text" class="hidden"
                                value={{ $groupProfessorItem->code }}>
                            </input>
                            {{-- THIS INPUT IS STYLEABLE; DECOY DISPLAY --}}
                            <input id="groupCodeShown" name="" type="text"
                                class="my-2 block p-2.5 w-full text-sm text-blue-800 font-semibold bg-gray-50 rounded-l-lg border border-r-0 border-gray-200 focus:ring-blue-500 focus:border-blue-500"
                                value={{ $groupProfessorItem->code }} disabled></input>
                            {{-- ACTIVATE CODE WHEN CLICKED COPY --}}
                            <button class="my-2 bg-blue-800 p-2.5 text-white rounded-r-lg"
                                onclick="setClipboard('{{ $groupProfessorItem->code }}')">
                                {{-- CLIPBOARD ICON --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </button>
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
                    </div>
                    <div>
                        <label for="name"
                            class="text-sm font-semibold text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Group
                            Name</label>
                        <input id="name" name="group[name]" type="text" value="{{ $groupProfessorItem->name }}"
                            class="my-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Please provide a name for your quiz."></input>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="text-sm font-semibold text-gray-900">Group Description</label>
                        <input id="description" name="group[description]"
                            value="{{ $groupProfessorItem->description }}"
                            class="my-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </input>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="is_active" name="group[is_active]" type="checkbox"
                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                            @if ($groupProfessorItem->is_active === '1') checked="checked" @endif>
                        <label for="is_active" class="ml-3 text-sm font-medium text-gray-900">Set active status</label>
                    </div>
                    <div class="flex justify-end mt-2">
                        {{-- BUTTON GROUP --}}
                        <div class="inline-flex" role="group">
                            <a
                                class="font-semibold text-xs text-blue-800 px-4 hover:text-blue-600 py-2 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700">
                                <input type="submit" class="font-semibold" value="UPDATE GROUP">
                            </a>
                            <a class="font-semibold text-xs text-blue-800 px-4 hover:text-blue-600 py-2 bg-white rounded-r-lg border-r border-t border-b border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700"
                                href="{{ route('groups.index') }}">
                                CANCEL
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <p class="font-semibold text-xl my-4 sm:text-left lg:text-left md:text-left text-center">Student
                List</p>
            <div class="block bg-white rounded-md shadow-sm mt-2 pt-4 px-8">
                @foreach ($groupStudents as $groupStudent)
                    <div class="leading-relaxed font-semibold text-gray-00 border-gray-500">
                        <p class="text-sm">Student ID: <span
                                class="font-normal">{{ $groupStudent->user_id }}</span></p>
                        <p class="text-sm">Student name: <span
                                class="font-normal">{{ $groupStudent->user->name }}</span></p>
                        <form method="POST" action="{{ route('removeStudent', $groupStudent->user_id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="flex justify-end">
                                <x-jet-button class="bg-red-500 hover:bg-red-300">
                                    <input class="font-semibold" type="submit" value="REMOVE STUDENT">
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                    <ul class="mb-2 border-b border-gray-200"></ul>
                @endforeach
            </div>
</x-app-layout>
