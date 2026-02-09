@php
    /**
     * Base Classes
     */
    $baseClasses = "text-2xl";
@endphp

<h4 {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</h4>
