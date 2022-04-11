<div class="container mx-auto my-4 block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
    {{-- GROUP ID --}}
    {{-- <label>GROUP ID: {{ $groupID }}</label>
    <br> --}}

    {{-- GROUP NAME --}}
    <p class="font-display font-bold text-3xl mb-2">
        {{ $groupName }}
    </p>

    {{-- GROUP DESCRIPTION --}}
    <p class="text-md">{{ $groupDescription }}</p>
    {{-- GROUP CODE --}}
    <p> Invite students using the code:
        <span onclick="setClipboard('{{ $groupCode }}')"
            class="font-display font-bold text-lg text-blue-800 cursor-pointer hover:underline">
            {{ $groupCode }}
        </span>
    </p>
    {{-- <div class="text-blue-800 text-sm flex items-center">
        <p> Invite students using the code:</p>
        <div class="flex items-center" role="group"> --}}
    {{-- GROUP CODE --}}
    {{-- <div
                class="font-bold ml-0 mt-1 lg:mt-0 md:mt-0 lg:ml-2 md:ml-2 p-1 px-2 border-t border-b border-l bg-sky-50 rounded-l-md text-sm">
                {{ $groupCode }}
            </div> --}}
    {{-- CLIPBOARD ICON --}}
    {{-- <div class="border bg-sky-50 rounded-r-lg mt-1 lg:mt-0 md:mt-0 p-1 hover:bg-blue-600 hover:text-white cursor-pointer "
                onclick="setClipboard('{{ $groupCode }}')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
        </div>
    </div> --}}
    {{-- TOTAL ACCUMULATED POINTS --}}
    <p class="font-display text-md">
        A total of
        <span class="font-bold text-blue-800">
            {{ $totalGroupPoints }}
        </span>
        group points.
    </p>

    {{-- NUMBER OF STUDENTS --}}
    <p class="font-display text-md">
        <span class="font-bold text-blue-800">
            {{ $numberOfStudents }}
        </span>
        total number of students.
    </p>
    {{-- PROFESSOR NAME --}}
    <p class="font-display text-md">
        Professor
        <span class="font-bold text-blue-800">
            {{ $professorName }}
        </span>
    </p>

    {{-- ACTIVE/INACTIVE INDICATOR --}}
    @if ($isActive == 1)
        <span
            class="inline-flex items-center bg-emerald-50 border border-emerald-300 px-2 rounded text-emerald-500 font-semibold text-sm w-auto mt-2 mx-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>ACTIVE
        </span>
    @elseif ($isActive == 0)
        <span
            class="inline-flex items-center bg-amber-50 border border-amber-300 px-2 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2 mx-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                    clip-rule="evenodd" />
            </svg>INACTIVE
        </span>
    @endif
</div>

{{-- SCRIPT FOR THE COPY COMMAND --}}
<script type="application/javascript">
    function setClipboard(value) {
        var tempInput = document.createElement("input");
        tempInput.style = "position: absolute; left: -1000px; top: -1000px";
        tempInput.value = value;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("Copied group code " + value);
    }
</script>
