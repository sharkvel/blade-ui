@php
    $baseClasses = 'flex h-8 items-center px-2 text-xs text-sidebar-foreground/70 ring-sidebar-ring';
@endphp

<div
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</div>
