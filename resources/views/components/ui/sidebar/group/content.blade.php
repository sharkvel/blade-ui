@php
    $baseClasses = 'w-full text-sm';
@endphp

<div
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
