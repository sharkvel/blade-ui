@php
    /**
     * Base Classes
     */
    $baseClasses = "p-2";
@endphp

<div {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</div>
