@props([
    'label' => '',
    'disabled' => false,
])

@php
    $baseClasses = 'bg-background text-xs font-medium text-foreground';
@endphp

<div @disabled($disabled)>
    <option
        {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
        value=""
        disabled
    >{{ $label }}</option>
    {{ $slot }}
</div>
