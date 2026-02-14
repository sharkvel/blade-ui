@props([
    'type' => 'button',
    'variant' => 'ghost',
    'size' => 'xs',
])

@php
    $baseClasses = 'flex items-center gap-2 text-sm shadow-none';

    $sizeClasses = match ($size) {
        'xs' => "h-6 gap-1 px-2 rounded-[calc(var(--radius)-5px)] [&>svg:not([class*='size-'])]:size-3.5 has-[>svg]:px-2",
        'sm' => 'h-8 gap-1.5 rounded-md px-2.5 has-[>svg]:px-2.5',
        'icon-xs' => 'size-6 rounded-[calc(var(--radius)-5px)] p-0 has-[>svg]:p-0',
        'icon-sm' => 'size-8 p-0 has-[>svg]:p-0',
    };
@endphp

<x-ui.button
    {{
    $attributes->merge([
        'class' => cn($baseClasses, $sizeClasses, $attributes->get('class')),
        'type' => $type,
        'variant' => $variant,
    ])
}}
>
    {{ $slot }}
</x-ui.button>
