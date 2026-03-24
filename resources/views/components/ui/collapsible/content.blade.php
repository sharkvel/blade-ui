@aware(["open" => false])
@php
    $baseClasses = "contents";
@endphp

<div
    @if(! $open)
        x-cloak
    @endif
    x-show="open"
    {{ $attributes->except('class')->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}
>{{ $slot }}</div>
