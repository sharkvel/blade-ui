@props([
    "orientation" => "horizontal",
])

@if ($orientation === "vertical")
    @php
        /**
         * Vertical
         * Base Classes
         */
        $baseClasses = "h-full shrink-0 border-r";
    @endphp

    <vr {{ $attributes }}></vr>
@else
    @php
        /**
         * Horizontal
         * Base Classes
         */
        $baseClasses = "w-full shrink-0";
    @endphp

    <hr {{ $attributes }} />
@endif
