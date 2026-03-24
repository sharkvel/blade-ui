@props([
    'open' => false,
])

@php
    $baseClasses = 'contents min-w-0';
@endphp

<div
    x-data="{ open: @js($open) }"
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
