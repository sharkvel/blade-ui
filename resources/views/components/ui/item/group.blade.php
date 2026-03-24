@php
    $baseClasses = 'group/item-group flex flex-col';
@endphp

<div
    role="list"
    data-slot="item-group"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
