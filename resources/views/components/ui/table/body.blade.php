@php
    $baseClasses = '[&_tr:last-child]:border-0';
@endphp

<tbody
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</tbody>
