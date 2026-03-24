@php
    $baseClasses = 'text-2xl';
@endphp

<h4
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</h4>
