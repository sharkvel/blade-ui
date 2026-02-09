@php
    /**
     * Base Classes
     */
    $baseClasses = "[&_tr]:border-b";
@endphp

<thead {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</thead>
