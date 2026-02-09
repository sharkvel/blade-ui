@php
    /**
     * Base Classes
     */
    $baseClasses = "my-6";
@endphp

<hr {{ $attributes->twMerge($baseClasses) }} />
