@php
    /**
     * Base Classes
     */
    $baseClasses = "text-3xl leading-tight tracking-tight";
@endphp

<h3 {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</h3>
