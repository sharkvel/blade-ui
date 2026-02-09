@php
    /**
     * Base Classes
     */
    $baseClasses = "text-lg";
@endphp

<h6 {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</h6>
