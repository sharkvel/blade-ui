@php
    $baseClasses = 'flex w-fit items-center gap-2 text-sm leading-snug font-medium';
@endphp

<div
    data-slot="item-title"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
