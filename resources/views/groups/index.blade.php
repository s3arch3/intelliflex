<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Groups') }}
        </h2>
    </x-slot>

    @if ($user_type == 'student')
        STUDENT MODE
        {{-- JOIN CLASS FEATURE FOR STUDENT ONLY --}}
        <label for="groupCode"
            class="text-xl font-medium text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500">Join Class</label>
        <div class="flex">
            <input id="groupCode" name="" type="text"
                class="mb-4 mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Input the 7-character group code here.">
            </input>
            {{-- ACTIVATE CODE WHEN CLICKED COPY --}}
        <x-jet-button href="{{ route('join') }}">
                JOIN GROUP
            </x-jet-button>
        </div>

    @elseif ($user_type == 'professor')
        PROFESSOR
    @elseif ($user_type == 'admin')
        ADMIN
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- GROUPS LIST --}}
            <ul role="list" class="divide-y divide-slate-700 dark:divide-slate-100 ">
                @foreach ($groups as $group)
                    <x-group-list-item :name="$group->name" :description="$group->description"
                        :isActive="$group->is_active" :id="$group->id" :code="$group->code" />
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
