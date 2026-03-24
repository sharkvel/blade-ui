@php
    $baseClasses = 'text-lg';
@endphp

<h6
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</h6>
