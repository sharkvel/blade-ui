@php
    $baseClasses = 'text-3xl leading-tight tracking-tight';
@endphp

<h3
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</h3>
