@php
    $baseClasses = 'hide-scrollbar max-h-80 scroll-py-3 overflow-x-hidden overflow-y-auto outline-none';
@endphp

<div
    data-slot="command-list"
    x-show="items.length > 0"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
