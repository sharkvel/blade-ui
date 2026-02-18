@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
    /**
     * Base classes
     */
    $baseClasses = "flex shrink-0 appearance-none items-center justify-center rounded-sm border border-transparent outline-none checked:after:content-['✓'] focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40";

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        'default' => 'border-input checked:border-primary checked:bg-primary checked:text-primary-foreground dark:bg-input/30 dark:hover:not-checked:bg-input/50',
        'secondary' => 'bg-secondary',
        'outline' => 'border-input dark:bg-input/30 dark:hover:not-checked:bg-input/50',
        'ghost' => 'bg-transparent',
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        'sm' => 'size-3 after:text-[0.5rem]',
        'default' => 'size-4 after:text-xs',
        'lg' => 'size-5 after:text-base',
    };
@endphp

<input
    data-slot="checkbox"
    type="checkbox"
    {{ $attributes->merge(['class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class'))]) }}
/>
