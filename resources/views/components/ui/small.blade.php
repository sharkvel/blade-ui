@php
    $baseClasses = 'block text-sm';
@endphp

<small
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</small>
