@props([
    'variant' => 'default',
])

@php
    /**
     * Base classes
     */
    $baseClasses = 'mb-2 flex shrink-0 items-center justify-center [&_svg]:pointer-events-none [&_svg]:shrink-0';

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        'default' => 'bg-transparent',
        'icon' => "bg-muted text-foreground flex size-10 shrink-0 items-center justify-center rounded-lg [&_svg:not([class*='size-'])]:size-6",
    };
@endphp

<div data-slot="empty-icon" {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</div>
