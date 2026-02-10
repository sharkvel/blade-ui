<x-app-layout>
    @pushOnce("css")
    <link rel="stylesheet" href="{{ asset("css/test.css") }}" />
    @endPushOnce
    <div class="grid h-screen place-content-center">
        <select class="flex h-8 w-45 items-center justify-center border px-2">
            <button>
                <selectedcontent></selectedcontent>
            </button>
            <div class="list *:h-8">
                <option value="thin"><span>Thin</span></option>
                <option value="light"><span>Light</span></option>
                <option value="regular" selected><span>Regular</span></option>
                <option value="medium"><span>Medium</span></option>
                <option value="semibold"><span>Semibold</span></option>
                <option value="bold"><span>Bold</span></option>
                <option value="black"><span>Black</span></option>
                <option value="megablack" disabled><span>Mega Black</span></option>
            </div>
        </select>
    </div>
    @pushOnce("js")
    <script src="{{ asset("js/test.js") }}"></script>
    @endPushOnce
</x-app-layout>
