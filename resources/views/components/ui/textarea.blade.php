@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
    $baseClasses = 'flex field-sizing-content w-full resize-y rounded-md border border-transparent bg-transparent text-base transition-colors outline-none placeholder:text-muted-foreground focus-within:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/40 disabled:pointer-events-none disabled:opacity-50 md:text-sm';

    $variantClasses = match ($variant) {
        'default' => 'border-input dark:bg-input/30',
    };

    $sizeClasses = match ($size) {
        'sm' => 'min-h-24 px-3 py-2',
        'default' => 'min-h-36 px-3 py-2',
        'lg' => 'min-h-48 px-3 py-2',
    };
@endphp

<textarea
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class'))]) }}
>{{ $slot }}</textarea>
