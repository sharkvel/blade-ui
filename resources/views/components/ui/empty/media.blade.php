@props([
    'variant' => 'default',
])

@php
    $baseClasses = 'mb-2 flex shrink-0 items-center justify-center [&_svg]:pointer-events-none [&_svg]:shrink-0';

    $variantClasses = match ($variant) {
        'default' => 'bg-transparent',
        'icon' => "bg-muted text-foreground flex size-9 shrink-0 items-center justify-center rounded-lg [&_svg:not([class*='size-'])]:size-4",
    };
@endphp

<div
    data-slot="empty-icon"
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $variantClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
