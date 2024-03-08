@if(Session()->has('success'))


<div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    {{session('success')}}
    <button id="closeBtn" type="button" class="absolute top-0 right-0 px-4 py-3" aria-label="Close">
        <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 5.36 4.652a.5.5 0 1 0-.707.708L9.293 10l-4.64 4.64a.5.5 0 0 0 .708.708L10 10.707l4.64 4.64a.5.5 0 0 0 .708-.708L10.707 10l4.64-4.64a.5.5 0 0 0 0-.708z"/></svg>
    </button>
</div>

<script>
    document.getElementById("closeBtn").addEventListener("click", function() {
        document.getElementById("alert").style.display = "none";
    });
</script>
@endif
