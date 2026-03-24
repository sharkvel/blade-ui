@props([
    'value',
])

@aware([
    'defaultValue' => '',
    'disabled' => false,
])

@php
    $baseClasses = 'bg-background text-foreground';
@endphp

<option
    value="{{ $value }}"
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
    @selected($defaultValue === $value)
    @disabled($disabled)
>{{ $slot }}</option>
