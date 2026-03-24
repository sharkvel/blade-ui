@php
    $baseClasses = 'flex grow flex-col gap-2 overflow-auto';
@endphp

<div
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
