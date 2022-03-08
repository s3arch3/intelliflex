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
        {{-- <br>
        <br> --}}
        {{-- JOIN CLASS FEATURE FOR STUDENT ONLY --}}
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

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

                {{-- LIST OF ALL GROUPS THAT THE USER JOINED --}}
                {{-- LIST OF ALL GROUPS THAT THE USER JOINED --}}
                {{-- LIST OF ALL GROUPS THAT THE USER JOINED --}}

                <br>
                <br>

                <div class="mb-3">
                    <p class=" font-display font-bold text-3xl mb-2"> List of all the
                        <span class="text-blue-600"> groups </span>you joined.
                    </p>
                    <p>Manage all your groups here.</p>
                </div>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                            @foreach ($groupStudents as $groupStudent)
                                <x-group-list-item userType="student" :name="$groupStudent->groupProfessor->name"
                                    :description="$groupStudent->groupProfessor->description"
                                    :isActive="$groupStudent->groupProfessor->is_active"
                                    :groupProfessorID="$groupStudent->groupProfessor->id"
                                    :groupStudentID="$groupStudent->id" :code="$groupStudent->groupProfessor->code" />
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($userType == 'professor')
        {{-- PROFESSOR INTERFACE --}}
        {{-- PROFESSOR INTERFACE --}}
        {{-- PROFESSOR INTERFACE --}}
        {{-- PROFESSOR INTERFACE --}}
        {{-- LIST ALL GROUPS THAT PROFESSOR CURRENTLY OWN --}}
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="mb-6">
                    <p class=" font-display font-bold text-3xl mb-2"> List of all your created
                        <span class="text-blue-600"> groups</span>.
                    </p>
                    <p>Manage all your groups here.</p>
                </div>

                <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                    @foreach ($groupProfessors as $groupProfessor)
                        <x-group-list-item userType="professor" :groupProfessorID="$groupProfessor->id"
                            :name="$groupProfessor->name" :description="$groupProfessor->description"
                            :isActive="$groupProfessor->is_active" :code="$groupProfessor->code" :groupStudentID="0" />
                    @endforeach
                </ul>
                {{-- CREATE A GROUP --}}
                <x-jet-button>
                    <a href="{{ route('groups.create') }}">
                        {{ __('CREATE GROUP') }}
                    </a>
                </x-jet-button>
            </div>
        </div>
    @elseif ($userType == 'admin')
        {{-- ADMIN INTERFACE --}}
        {{-- ADMIN INTERFACE --}}
        {{-- ADMIN INTERFACE --}}
        ADMIN INTERFACE
        <br>
        <br>

    @endif
</x-app-layout>
