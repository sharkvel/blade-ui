@php
    $baseClasses = 'py-6 text-center text-sm';
@endphp

<div
    data-slot="command-empty"
    x-cloak
    {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>
    {{ $slot }}
</div>
