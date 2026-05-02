@php
    $baseClasses = "text-base max-w-[60ch] leading-relaxed";
@endphp

<p
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</p>