@php
    /**
     * Base Classes
     */
    $baseClasses = "text-xl";
@endphp

<h5 {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</h5>
