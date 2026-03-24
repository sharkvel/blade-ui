@php
    $baseClasses = 'text-xl';
@endphp

<h5
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</h5>
