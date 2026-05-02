@php
    $baseClasses = "text-base leading-relaxed max-w-[55ch] text-muted-foreground";
@endphp

<p
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</p>