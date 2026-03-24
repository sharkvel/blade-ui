@php
    $baseClasses = 'relative';
@endphp

<li
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</li>
