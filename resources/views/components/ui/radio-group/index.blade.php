@props([
    'defaultValue' => null,
    'name',
])

@php
    $baseClasses = 'grid gap-3';
@endphp

<div
    data-slot="radio-group"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
