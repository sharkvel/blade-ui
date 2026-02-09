@php
    /**
     * Base Classes
     */
    $baseClasses = "flex grow flex-col gap-2 overflow-auto";
@endphp

<div {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</div>
