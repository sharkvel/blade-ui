@php
    $baseClasses = 'flex flex-1 flex-col gap-1 [&+[data-slot=item-content]]:flex-none';
@endphp

<div
    data-slot="item-content"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
