@php
    $baseClasses = 'flex w-full flex-col gap-1';
@endphp

<ul
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</ul>
