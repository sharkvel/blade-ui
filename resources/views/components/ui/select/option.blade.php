@props([
    "value",
])

@aware([
    "defaultValue" => "",
    "disabled" => false,
])

@php
    /**
     * Base Classes
     */
    $baseClasses = "bg-background text-foreground";
@endphp

<option
    value="{{ $value }}"
    {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}
    @selected($defaultValue === $value)
    @disabled($disabled)
>
    {{ $slot }}
</option>
