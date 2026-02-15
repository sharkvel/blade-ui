@props([
    'defaultValue' => null,
    'name',
])

@php
    $baseClasses = 'grid gap-3';
@endphp

<div
    data-slot="radio-group"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
