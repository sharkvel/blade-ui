@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
    $baseClasses = 'flex items-center';

    $variantClasses = match ($variant) {
        'default' => 'rounded-lg bg-muted',
        'line' => '',
        'simple' => '',
    };

    $sizeClasses = match ($size) {
        'sm' => 'h-8 p-1',
        'default' => 'h-9 p-1',
        'lg' => 'h-10 p-1',
        'icon-sm' => 'h-8 p-1',
        'icon' => 'h-9 p-1',
        'icon-lg' => 'h-10 p-1',
    };
@endphp

<div
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
