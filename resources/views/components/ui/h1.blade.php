@php
    /**
     * Base Classes
     */
    $baseClasses = "text-5xl leading-tight tracking-tight";
@endphp

<h1 {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</h1>
