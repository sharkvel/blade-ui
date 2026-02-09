@props([
    "label" => "",
    "disabled" => false,
])

@php
    /**
     * Base Classes
     */
    $baseClasses = "bg-background text-xs font-medium text-foreground";
@endphp

<div @disabled($disabled)>
    <option {{ $attributes->twMerge($baseClasses) }} value="" disabled>{{ $label }}</option>
    {{ $slot }}
</div>
