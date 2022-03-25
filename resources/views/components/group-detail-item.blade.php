<div class="container my-4 mx-auto block px-4 py-4 bg-white shadow-md rounded-md leading-relaxed text-center">
    {{-- GROUP ID --}}
    {{-- <label>GROUP ID: {{ $groupID }}</label>
    <br> --}}

    {{-- GROUP NAME --}}
    <label class="font-display font-bold text-3xl mb-2">{{ $groupName }}</label>
    <br>

    {{-- GROUP DESCRIPTION --}}
    <label>{{ $groupDescription }}</label>
    <br>

    {{-- GROUP CODE --}}
    <label onclick="setClipboard('{{ $groupCode }}')" class="font-display font-bold text-lg mb-2 text-blue-800 cursor-pointer hover:underline">
        {{ $groupCode }}
    </label>
    <br>

    {{-- TOTAL ACCUMULATED POINTS --}}
    <label class="font-display font-bold text-lg mb-2">
        A total of
        <span class="font-bold text-blue-800">
            {{ $totalGroupPoints }}
        </span>
        group points.
    </label>
    <br>

    {{-- NUMBER OF STUDENTS --}}
    <label class="font-display font-bold text-lg mb-2">
        <span class="font-bold text-blue-800">
            {{ $numberOfStudents }}
        </span>
        total number of students.</label>
    <br>

    {{-- PROFESSOR NAME --}}
    <label class="font-display font-bold text-lg mb-2">
        Professor
        <span class="font-bold text-blue-800">
            {{ $professorName }}
        </span>
    </label>
    <br>

    {{-- ACTIVE/INACTIVE INDICATOR --}}
    @if ($isActive == 1)
        <span
            class="bg-emerald-50 border border-emerald-300 px-4 rounded-full text-emerald-500 font-semibold text-sm w-28 mt-2 mx-2">
            Active
        </span>
    @elseif ($isActive == 0)
        <span
            class="bg-amber-50 border border-amber-300 px-4 rounded-full text-amber-500 font-semibold text-sm w-28 mt-2 mx-2">
            Inactive
        </span>
    @endif
    <br>
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