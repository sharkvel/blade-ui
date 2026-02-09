@php
    /**
     * Base Classes
     */
    $baseClasses = "text-4xl leading-tight tracking-tight";
@endphp

<h2 {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</h2>
