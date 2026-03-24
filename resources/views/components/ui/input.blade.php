@props([
    'variant' => 'default',
    'size' => 'default',
    'type' => 'text',
])

@php
    $baseClasses = 'inline-flex w-full min-w-0 gap-1.5 rounded-md border border-transparent text-base transition-colors outline-none file:inline-flex file:align-middle file:text-sm file:leading-none file:font-medium file:text-foreground placeholder:text-muted-foreground focus-within:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/40 disabled:pointer-events-none disabled:opacity-50 md:text-sm file:[&+text]:align-middle';

    $variantClasses = match ($variant) {
        'default' => 'border-input dark:bg-input/30 dark:[&::-webkit-calendar-picker-indicator]:invert',
    };

    $sizeClasses = match ($size) {
        'sm' => 'h-8 px-3 file:py-1.5',
        'default' => 'h-9 px-3 file:py-2',
        'lg' => 'h-10 px-3 file:py-2.5',
    };
@endphp

<input
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class')), 'type' => $type]) }}
/>
