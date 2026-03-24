@props([
    'variant' => 'default',
    'size' => 'default',
])
@php

    $baseClasses = 'text-sm leading-none font-medium select-none disabled:pointer-events-none disabled:opacity-50';

    $variantClasses = match ($variant) {
        'default' => 'text-foreground',
    };

    $sizeClasses = match ($size) {
        'default' => 'text-sm',
    };
@endphp

<label
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class'))]) }}
>{{ $slot }}</label>
