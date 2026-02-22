@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
    /**
     * Base classes
     */
    $baseClasses = 'inline-flex w-fit shrink-0 items-center justify-center gap-1 overflow-hidden rounded-full border px-2 py-0.5 text-xs font-medium whitespace-nowrap transition-[color,box-shadow] focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&>svg]:pointer-events-none [&>svg]:size-3';

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        'default' => 'border-transparent bg-primary text-primary-foreground [a>&]:hover:bg-primary/90',
        'secondary' => 'border-transparent bg-secondary text-secondary-foreground [a>&]:hover:bg-secondary/90',
        'destructive' => 'border-transparent bg-destructive text-white focus-visible:ring-destructive/20 dark:bg-destructive/60 dark:focus-visible:ring-destructive/40 [a>&]:hover:bg-destructive/90',
        'outline' => 'text-foreground [a>&]:hover:bg-accent [a>&]:hover:text-accent-foreground',
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        'default' => 'has-data-[icon=inline-end]:pr-1 has-data-[icon=inline-start]:pl-1',
    };
@endphp

<span
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</span>
