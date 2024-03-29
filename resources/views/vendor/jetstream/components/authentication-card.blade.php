<div class="min-h-screen flex flex-col sm:justify-center bg-blue-600 p-4 pb-16">
    <button class="p-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
            <path fill-rule="evenodd"
                d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>
    <div class="items-center">
        <img class="w-36 mx-auto " src="{{ asset('/assets/logo/intelliflex-logo-auth.png') }}" alt="">
        <div class="mx-auto w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-sm overflow-hidden rounded-md">
            {{ $slot }}
        </div>
    </div>
</div>
