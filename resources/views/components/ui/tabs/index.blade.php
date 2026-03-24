@props([
    'defaultValue' => '',
])

@php
    $baseClasses = 'flex flex-col gap-2';
@endphp

<div
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
    x-data="{ tab: '{{ $defaultValue }}' }"
>{{ $slot }}</div>
