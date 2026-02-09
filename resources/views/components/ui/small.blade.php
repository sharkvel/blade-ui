@php
    /**
     * Base Classes
     */
    $baseClasses = "block text-sm";
@endphp

<small {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</small>
