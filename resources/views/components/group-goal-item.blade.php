<div class="w-40 text-center bg-white rounded-md p-4 border border-bg-gray-300 mx-1">
    <img src="{{ asset('assets/illustrations/goals-icon/1-deja-vu.png') }}"
        class="mx-auto w-16 h-16 mb-4" alt="">
    <b class="m-2 text-blue-600">{{ $goalName }} </b>
    <p class="m-2 text-sm text-gray-600">{{ $goalDescription }} </p>
    @if ($achieved == true)
        DONE  THIS
    @else
        NOT YET
    @endif
</div>