@php
    $baseClasses = 'p-2';
@endphp

<div
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
