@php
    /**
     * Base Classes
     */
    $baseClasses = "text-base leading-relaxed";
@endphp

<p {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</p>
