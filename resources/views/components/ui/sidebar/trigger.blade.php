@php
    $baseClasses = 'contents';
@endphp

<div
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
    @click="open = !open"
    data-trigger="sidebar"
>{{ $slot }}</div>
