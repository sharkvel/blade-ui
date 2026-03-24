@php
    $baseClasses = 'mt-4 text-sm text-muted-foreground';
@endphp

<caption
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</caption>
