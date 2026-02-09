@php
    /**
     * Base Classes
     */
    $baseClasses = "w-full text-sm";
@endphp

<div {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</div>
