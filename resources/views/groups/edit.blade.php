<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Group') }}
        </h2>
    </x-slot>

    {{-- BACK TO GROUPS LIST --}}
    <div class="py-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-button>
                <a href="{{ route('groups.index') }}">
                    GO BACK
                </a>
            </x-jet-button>

            <br>

            <label for="groupCode"
                class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Group
                Code</label>
            <div class="flex">
                {{-- HIDDEN INPUT; NO NEED TO STYLE --}}
                {{-- THIS INPUT IS PASSED ON JAVASCRIPT CODE BELOW --}}
                <input id="groupCodeHidden" name="" type="text" class="hidden" value={{ $groupProfessorItem->code }}>
                </input>
                {{-- THIS INPUT IS STYLEABLE; DECOY DISPLAY --}}
                <input id="groupCodeShown" name="" type="text"
                    class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    value={{ $groupProfessorItem->code }} disabled>
                </input>
                {{-- ACTIVATE CODE WHEN CLICKED COPY --}}
                <x-jet-button onclick="setClipboard('{{ $groupProfessorItem->code }}')">
                    COPY CODE
                </x-jet-button>

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

            {{-- FORM FOR GROUP EDIT --}}
            {{-- FORM FOR GROUP EDIT --}}
            {{-- FORM FOR GROUP EDIT --}}
            <div class="block p-10 bg-white rounded-md shadow-sm">
                <form method="POST" action="{{ route('groups.update', $groupProfessorItem->id) }}">
                    @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                    @method('PUT') {{-- Put a little @method directive because we are in an Edit page. --}}
                    <div>
                        <label for="name"
                            class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Group
                            Name</label>
                        <input id="name" name="group[name]" type="text" value="{{ $groupProfessorItem->name }}"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Please provide a name for your quiz."></input>
                    </div>
                    <div>
                        <label for="description" class="text-xl font-medium text-gray-900">Group Description</label>
                        <input id="description" name="group[description]" value="{{ $groupProfessorItem->description }}"
                            class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </input>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="is_active" name="group[is_active]" type="checkbox"
                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                            @if ($groupProfessorItem->is_active === '1') checked="checked" @endif>
                        <label for="is_active" class="ml-3 text-sm font-medium text-gray-900">Active?</label>
                    </div>

                    <x-jet-button>
                        <input type="submit" class="font-semibold" value="UPDATE GROUP">
                    </x-jet-button>

                    <x-jet-button>
                        <a href="{{ route('groups.index') }}">
                            CANCEL
                        </a>
                    </x-jet-button>
                </form>
            </div>

            <div class="block p-10 bg-white rounded-md shadow-sm">
                <label for="studentList"
                    class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Student List</label>
                @foreach ($groupStudents as $groupStudent)
                    <div class="text-md leading-relaxed font-semibold text-gray-00 border-gray-500">
                        <label>STUDENT ID: {{ $groupStudent->user_id }}</label> <br>
                        <label>STUDENT NAME: {{ $groupStudent->user->name }}</label> <br>


                        <form method="POST" action="{{ route('removeStudent', $groupStudent->user_id) }}">
                            @csrf
                            @method('DELETE')
                            <x-jet-button class="ml-4 bg-red-500 hover:bg-red-300">
                                <input class="font-semibold" type="submit" value="REMOVE STUDENT">
                            </x-jet-button>
                        </form>

                    </div>
                    <br>
                @endforeach
            </div>
</x-app-layout>
