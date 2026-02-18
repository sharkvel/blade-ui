@props([
    'variant' => 'default',
    'size' => 'default',
])
@php
    /**
     * Base classes
     */
    $baseClasses = 'text-sm leading-none font-medium select-none disabled:pointer-events-none disabled:opacity-50';

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        'default' => 'text-foreground',
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        'default' => 'text-sm',
    };
@endphp

<label {{ $attributes->merge(['class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class'))]) }}>{{ $slot }}</label>
