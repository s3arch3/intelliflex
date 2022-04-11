{{-- THIS COMPONENT IS FOR A GROUP GOAL ITEM --}}
<div class="w-80 text-center bg-white rounded-md p-4 border border-bg-gray-300">
    {{-- GROUP GOAL LOGO --}}
    <img src="{{ asset('assets/illustrations/goals-icon/1-deja-vu.png') }}" class="mx-auto w-16 h-16 mb-2" alt="">

    {{-- ACHIEVEMENT STATUS CHIPS --}}
    @if ($achieved == true)
        <div
            class="mx-auto bg-emerald-50 border border-emerald-300 rounded text-emerald-500 font-semibold text-sm w-auto my-2">
            Acquired
        </div>
    @else
        <div class="mx-auto bg-amber-50 border border-amber-300 rounded text-amber-500 font-semibold text-sm w-20 my-2">
            {{ $totalGroupPoints . '/' . $goal }}
        </div>
    @endif

    {{-- GROUP GOAL NAME --}}
    <b class="text-blue-600">
        {{ $goalName }}
    </b>

    {{-- GROUP GOAL DESCRIPTION --}}
    <p class="text-sm text-gray-600">
        {{ $goalDescription }}
    </p>
</div>
