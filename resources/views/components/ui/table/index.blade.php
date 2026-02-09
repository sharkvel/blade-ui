@php
    /**
     * Base Classes
     */
    $baseClasses = "relative w-full caption-bottom overflow-hidden text-sm";
@endphp

<div class="hide-scrollbar relative grid w-full overflow-x-auto">
    <table {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</table>
</div>
