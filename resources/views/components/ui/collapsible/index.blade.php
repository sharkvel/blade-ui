@props([
    'open' => false,
])

@php
    /**
     * Base classes
     */
    $baseClasses = 'contents min-w-0';
@endphp

<div
    x-data="{ open: @js($open) }"
    {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>
    {{ $slot }}
</div>
