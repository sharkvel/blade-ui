@props([
    'variant' => 'legend',
])

@php

    $baseClasses = 'mb-1.5 font-medium';

    $variantClasses = match ($variant) {
        'legend' => 'text-base',
        'label' => 'text-sm',
    };
@endphp

<legend
    data-slot="field-legend"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $variantClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</legend>
