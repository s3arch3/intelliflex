<div class="mx-auto mt-4 block px-4 py-4 bg-white rounded-md leading-relaxed text-center">
    {{-- QUIZ ID --}}
    {{-- <label>QUIZ ID: {{ $quizItem->id }}</label>
    <br> --}}

    {{-- QUIZ NAME --}}
    <div>
        <label class="font-display font-bold text-3xl mb-2">{{ $quizName }}</label>
    </div>

    {{-- QUIZ DESCRIPTION --}}
    <div class="mt-2">
        <label>{{ $quizDescription }}</label>
    </div>

    {{-- ACTIVE/INACTIVE INDICATOR --}}
    <div class="
        mt-2">
        @if ($isActive == 1)
            <span
                class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2 mx-2">
                ACTIVE
            </span>
        @elseif ($isActive == 0)
            <span
                class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2 mx-2">
                INACTIVE
            </span>
        @endif
    </div>
</div>
