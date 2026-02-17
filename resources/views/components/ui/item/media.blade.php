@props([
    'variant' => 'default',
])

@php
    $baseClasses = 'flex shrink-0 items-center justify-center gap-2 group-has-data-[slot=item-description]/item:translate-y-0.5 group-has-data-[slot=item-description]/item:self-start [&_svg]:pointer-events-none';
    $variantClasses = match ($variant) {
        'default' => 'bg-transparent',
        'icon' => 'size-8 rounded-sm border bg-muted [&_svg:not([class*=size-])]:size-4',
        'image' => 'size-10 overflow-hidden rounded-sm [&_img]:size-full [&_img]:object-cover',
    };
@endphp

<div
    data-slot="item-media"
    data-variant="{{ $variant }}"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $variantClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
