@php
    $baseClasses = 'text-xl font-medium leading-tight tracking-tight';
@endphp

<h2
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</h2>