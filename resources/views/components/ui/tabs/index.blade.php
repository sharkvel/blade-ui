@props([
    "defaultValue" => "",
])

@php
    /**
     * Base classes
     */
    $baseClasses = "flex flex-col gap-2";
@endphp

<div {{ $attributes->twMerge($baseClasses) }} x-data="{ tab: '{{ $defaultValue }}' }">
    {{ $slot }}
</div>
