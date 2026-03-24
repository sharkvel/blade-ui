@php
    $baseClasses = '[&_tr]:border-b';
@endphp

<thead
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</thead>
