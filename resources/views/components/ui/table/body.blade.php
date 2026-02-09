@php
    /**
     * Base Classes
     */
    $baseClasses = "[&_tr:last-child]:border-0";
@endphp

<tbody {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</tbody>
