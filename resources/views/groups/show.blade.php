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
</x-app-layout>
