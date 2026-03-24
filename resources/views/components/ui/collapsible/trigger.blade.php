@php
    $baseClasses = 'contents';
@endphp

<div
    @click="open = !open"
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
