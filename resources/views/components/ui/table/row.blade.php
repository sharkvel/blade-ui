@php
    /**
     * Base Classes
     */
    $baseClasses = "border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted";
@endphp

<tr {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</tr>
