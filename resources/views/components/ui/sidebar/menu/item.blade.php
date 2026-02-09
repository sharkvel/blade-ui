@php
    /**
     * Base Classes
     */
    $baseClasses = "relative";
@endphp

<li {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</li>
