@php
    /**
     * Base Classes
     */
    $baseClasses = "mt-4 text-sm text-muted-foreground";
@endphp

<caption {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</caption>
