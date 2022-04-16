<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Groups') }}
        </h2>
    </x-slot>
    @if ($userType == 'student')
        {{-- STUDENT INTERFACE --}}
        {{-- STUDENT INTERFACE --}}
        {{-- STUDENT INTERFACE --}}
        {{-- STUDENT INTERFACE --}}
        {{-- JOIN CLASS FEATURE FOR STUDENT ONLY --}}
        <div class="py-4 px-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- LIST OF ALL GROUPS THAT THE USER JOINED --}}
                {{-- LIST OF ALL GROUPS THAT THE USER JOINED --}}
                {{-- LIST OF ALL GROUPS THAT THE USER JOINED --}}
                <div class="mt-8 mb-4">
                    <p class=" font-display font-bold text-3xl mb-2"> List of all the
                        <span class="text-blue-600"> groups </span>you joined.
                    </p>
                    <p class="text-sm">Manage all your groups here.</p>
                </div>
                <div class="max-w-7xl mx-auto mb-4">
                    <ul role="list" class="bg-white divide-y divide-slate-100 rounded-md shadow-sm">
                        @foreach ($groupStudents as $groupStudent)
                            <x-group-list-item userType="student" :name="$groupStudent->groupProfessor->name" :description="$groupStudent->groupProfessor->description" :isActive="$groupStudent->groupProfessor->is_active"
                                :groupProfessorID="$groupStudent->groupProfessor->id" :groupStudentID="$groupStudent->id" :code="$groupStudent->groupProfessor->code" />
                        @endforeach
                    </ul>
                </div>

                <div class="block max-w-sm mx-auto lg:mx-0 lg:max-w-md px-8 py-4 bg-white rounded-md shadow-sm">
                    <form method="POST" action="{{ route('join') }}">
                        @csrf {{-- Little csrf guy protecting us from cross site attacks <3 --}}
                        <label for="groupCode"
                            class="text-sm font-semibold text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Join
                            Class</label>
                        <div class="flex">
                            <input id="groupCode" name="groupCode" type="text"
                                class="my-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Input the 7-character group code here.">
                            </input>
                        </div>
                        <div class="flex justify-end pt-2">
                            {{-- BUTTON GROUP --}}
                            <div class="inline-flex rounded-md" role="group">
                                {{-- <a class="font-semibold text-xs text-blue-800 px-4 hover:text-blue-600 py-2 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700"
                                href="
                                {{ route('groups.index') }}">
                                CANCEL
                            </a> --}}
                                <a>
                                    <input type="submit"
                                        class="font-semibold text-xs text-white px-4 hover:text-blue-600 py-2 bg-blue-800  border-gray-200 rounded-lg border hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-300 focus:text-blue-700"
                                        value="JOIN">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @elseif ($userType == 'professor')
        {{-- PROFESSOR INTERFACE --}}
        {{-- PROFESSOR INTERFACE --}}
        {{-- PROFESSOR INTERFACE --}}
        {{-- PROFESSOR INTERFACE --}}
        {{-- LIST ALL GROUPS THAT PROFESSOR CURRENTLY OWN --}}
        <div class="pt-8 px-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <p class=" font-display font-bold text-3xl mb-4"> List of all your created
                    <span class="text-blue-600"> groups</span>.
                </p>
                <p class="mb-4">Manage all your groups here.</p>
                <ul role="list" class="bg-white divide-y divide-slate-100 rounded-md shadow-sm">
                    @foreach ($groupProfessors as $groupProfessor)
                        <x-group-list-item userType="professor" :groupProfessorID="$groupProfessor->id" :name="$groupProfessor->name" :description="$groupProfessor->description"
                            :isActive="$groupProfessor->is_active" :code="$groupProfessor->code" :groupStudentID="0" />
                    @endforeach
                </ul>
                {{-- CREATE A GROUP --}}
                <div class="flex justify-end px-4">
                    <x-jet-button>
                        <a href="{{ route('groups.create') }}">
                            {{ __('CREATE GROUP') }}
                        </a>
                    </x-jet-button>
                </div>
            </div>
        </div>
    @elseif ($userType == 'admin')
        {{-- ADMIN INTERFACE --}}
        {{-- ADMIN INTERFACE --}}
        {{-- ADMIN INTERFACE --}}
        ADMIN INTERFACE
    @endif
</x-app-layout>
