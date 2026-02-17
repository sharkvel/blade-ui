@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
    $baseClasses = 'group/item flex w-full flex-wrap items-center rounded-md border border-transparent text-sm transition-colors duration-100 outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 [a>&]:transition-colors [a>&]:hover:bg-accent/50';
    $variantClasses = match ($variant) {
        'default' => 'bg-transparent',
        'outline' => 'border-border',
        'muted' => 'bg-muted/50',
    };
    $sizeClasses = match ($size) {
        'default' => 'gap-4 p-4',
        'sm' => 'gap-2.5 px-4 py-3',
    };
@endphp

<div
    data-slot="item"
    data-variant="{{ $variant }}"
    data-size="{{ $size }}"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
