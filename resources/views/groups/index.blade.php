<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Groups') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- GROUPS LIST --}}
            <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                @foreach ($groups as $group)
                    <x-group-list-item :name="$group->name" :description="$group->description"
                        :isActive="$group->is_active" :id="$group->id"
                        :code="$group->code" />
                @endforeach
            </ul>
            {{-- CREATE QUIZ BUTTON --}}
            <x-jet-button>
                {{-- IF USER IS A PROFESSOR --}}
                <a href="{{ route('groups.create') }}">
                    {{ __('CREATE GROUP') }}
                </a>
            </x-jet-button>
        </div>
    </div>
</x-app-layout>
