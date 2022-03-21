<div>
    {{--
    #1 [STUDENT NAME] [SCORE] [GOLD]
    #2 [STUDENT NAME] [SCORE] [SILVER]
    #3 [STUDENT NAME] [SCORE] [BRONZE]
    --}}

    {{--
    accepts:
    group quiz id (for query here later)
    --}}

    {{-- @foreach ($quizLogs as $quizLog)
        if 1 == gold image
        if 2 == silver image
        if 3 == bronze image
        <div class="flex-1 min-w-0">
            [{{ $studentName }}]
            TOTAL SCORE:
            [{{ $totalQuizScore }}]
            [{{ $achievement }}]
        </div>
        <br>

    @endforeach
</div>