@props([
    "defaultValue" => "",
])

@php
    /**
     * Base classes
     */
    $baseClasses = "flex flex-col gap-2";
@endphp

<div
    {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}
    x-data="{ tab: '{{ $defaultValue }}' }"
>
    {{ $slot }}
</div>
