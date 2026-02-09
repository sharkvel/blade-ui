@php
    /**
     * Base classes
     */
    $baseClasses = "border-l-2 pl-6 italic";
@endphp

<blockquote {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</blockquote>
