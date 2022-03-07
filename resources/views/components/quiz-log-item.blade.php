<div class="bg-slate-100 rounded-md mt-4">
    <li class="py-3 sm:py-4 px-4 list-none">
        <div class="flex justify-between items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-8 h-8 rounded-full" src="{{ asset('assets/illustrations/quiz-logo.png') }}"
                    alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href={{ route('log', $id) }} class="hover:underline text-sm font-bold text-blue-800 truncate">
                    {{ $name }}
                </a>
                <p class="text-sm text-gray-600 truncate">
                    Of all
                    <span class="text-blue-600 font-bold">{{ $questionsCount }}</span>
                    questions in the quiz, you scored
                    <span class="text-blue-600 font-bold">{{ $score }}</span>.
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900">


            </div>
        </div>
    </li>
</div>
