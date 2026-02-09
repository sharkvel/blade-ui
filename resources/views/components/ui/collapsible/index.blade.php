@props([
    "open" => false,
])

@php
    /**
     * Base classes
     */
    $baseClasses = "contents min-w-0";
@endphp

<div x-data="{ open: @js($open) }" {{ $attributes->twMerge($baseClasses) }}>
    {{ $slot }}
</div>
