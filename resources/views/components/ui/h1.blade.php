@php
    $baseClasses = 'text-5xl leading-tight tracking-tight';
@endphp

<h1
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</h1>
