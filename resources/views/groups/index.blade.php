<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Groups') }}
        </h2>
    </x-slot>

    @if ($userType == 'student')
        STUDENT MODE
        <br>
        <br>
        {{-- JOIN CLASS FEATURE FOR STUDENT ONLY --}}
        <div class="block p-10 bg-white rounded-md shadow-sm">
            <form method="POST" action="{{ route('join') }}">
                @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                <label for="groupCode"
                    class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Join
                    Class</label>
                <div class="flex">
                    <input id="groupCode" name="groupCode" type="text"
                        class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Input the 7-character group code here.">
                    </input>
                </div>
                <x-jet-button>
                    <input type="submit" class="font-semibold" value="JOIN GROUP">
                </x-jet-button>

                <x-jet-button>
                    <a href="{{ route('groups.index') }}">
                        CANCEL
                    </a>
                </x-jet-button>
            </form>
        </div>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- GROUPS LIST --}}
                <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                    @foreach ($groupMembers as $groupMember)
                        <x-group-list-item userType="student" :name="$groupMember->group->name"
                            :description="$groupMember->group->description" :isActive="$groupMember->group->is_active"
                            :id="$groupMember->group->id" :code="$groupMember->group->code" />
                    @endforeach
                </ul>

            </div>
        </div>
    @elseif ($userType == 'professor')
        PROFESSOR MODE
        <br>
        <br>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- GROUPS LIST --}}
                <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                    @foreach ($groups as $group)
                        <x-group-list-item userType="professor" :name="$group->name"
                            :description="$group->description" :isActive="$group->is_active" :id="$group->id"
                            :code="$group->code" />
                    @endforeach
                </ul>

            </div>
        </div>
        {{-- CREATE GROUP BUTTON --}}
        <x-jet-button>
            {{-- IF USER IS A PROFESSOR --}}
            <a href="{{ route('groups.create') }}">
                {{ __('CREATE GROUP') }}
            </a>
        </x-jet-button>
    @elseif ($userType == 'admin')
        ADMIN MODE
        <br>
        <br>

    @endif
</x-app-layout>
