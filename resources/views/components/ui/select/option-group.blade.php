@props([
    'label' => '',
    'disabled' => false,
])

@php
    /**
     * Base Classes
     */
    $baseClasses = 'bg-background text-xs font-medium text-foreground';
@endphp

<div @disabled($disabled)>
    <option
        {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
        value=""
        disabled
    >
        {{ $label }}
    </option>
    {{ $slot }}
</div>
