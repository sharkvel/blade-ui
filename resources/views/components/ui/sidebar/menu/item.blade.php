@php
    $baseClasses = 'relative';
@endphp

<li
    {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</li>
