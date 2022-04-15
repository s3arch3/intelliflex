<div class="w-80 text-center bg-white rounded-md p-4 border border-bg-gray-300">
    <img src="{{ $imageLocation }}" class="mx-auto w-16 h-16 mb-4" alt="">
    <b class="m-2 text-blue-600">{{ $goalName }} </b>
    <p class="m-2 text-sm text-gray-600">{{ $goalDescription }} </p>

    <p
        class="inline-flex items-center bg-blue-50 border border-blue-300 px-2 rounded text-blue-600 font-semibold text-sm w-auto mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z"
                clip-rule="evenodd" />
        </svg>
        Requirement: {{ $goalRequirement }}
    </p>
    <br>

</div>
