@php
    $baseClasses = 'py-6 text-center text-sm';
@endphp

<div
    data-slot="command-empty"
    x-cloak
    x-show="items.length == 0"
    {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>
    {{ $slot }}
</div>
