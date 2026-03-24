@props([
    'variant' => 'default',
    'size' => 'default',
    'value',
])

@php
    $baseClasses = 'checked:after:content flex appearance-none items-center justify-center rounded-full border border-transparent after:rounded-full disabled:pointer-events-none disabled:opacity-50';

    $variantClasses = match ($variant) {
        'default' => 'border-input checked:border-primary checked:bg-primary checked:after:bg-primary-foreground dark:bg-input/30 dark:hover:not-checked:bg-input/50',
        'secondary' => 'bg-secondary checked:after:bg-primary',
        'outline' => 'border-input checked:after:bg-primary dark:bg-input/30 dark:hover:not-checked:bg-input/50',
        'ghost' => 'bg-transparent checked:after:bg-primary',
    };

    $sizeClasses = match ($size) {
        'sm' => 'size-3 after:size-1.5',
        'default' => 'size-4 after:size-2',
        'lg' => 'size-5 after:size-2.5',
    };
@endphp

<input
    type="radio"
    value="{{ $value }}"
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class'))]) }}
/>
