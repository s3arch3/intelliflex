<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group Details') }}
        </h2>
    </x-slot>
    <div class="block px-24 py-4 bg-yellow-400 rounded-md shadow-sm mx-auto">
        <form class="text-md leading-relaxed font-semibold text-gray-00">
            <label>GROUP ID: {{ $groupItem->id }}</label> <br>
            <label>GROUP NAME: {{ $groupItem->name }}</label> <br>
            <label>GROUP DESC: {{ $groupItem->description }}</label> <br>
            <label>GROUP CODE: {{ $groupItem->code }}</label> <br>
            <label>ACTIVE: @if ($groupItem->is_active === "1") YES @else NO @endif</label> <br>
        </form>
    </div>

    @if ($userType == 'student')
    STUDENT MODE
    <br>
    <br>


    @elseif ($userType == 'professor')
    PROFESSOR MODE
    <br>
    <br>
    <div class="block p-10 bg-white rounded-md shadow-sm">
        <label for="studentList"
            class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Student List</label>
        @foreach ($groupMembers as $groupMember)
            <div class="text-md leading-relaxed font-semibold text-gray-00 border-gray-500">
                <label>STUDENT ID: {{ $groupMember->user_id }}</label> <br>
                <label>STUDENT NAME: {{ $groupMember->user->name }}</label> <br>
            </div>
            <br>
        @endforeach
    </div>
    @elseif ($userType == 'admin')
    ADMIN MODE
    <br>
    <br>

    @endif

</x-app-layout>
