<div class="container mt-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
    {{-- QUIZ ID --}}
    {{-- <label>QUIZ ID: {{ $quizItem->id }}</label>
    <br> --}}

    {{-- QUIZ NAME --}}
    <label class="font-display font-bold text-3xl mb-2">{{ $quizName }}</label>
    <br>

    {{-- QUIZ DESCRIPTION --}}
    <label>{{ $quizDescription }}</label>
    <br>

    {{-- ACTIVE/INACTIVE INDICATOR --}}
    @if ($isActive == 1)
        <span class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2 mx-2">
            Active
        </span>
    @elseif ($isActive == 0)
        <span class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2 mx-2">
            Inactive
        </span>
    @endif
    <br>
</div>