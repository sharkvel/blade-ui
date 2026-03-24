@php
    $baseClasses = 'flex items-center gap-2';
@endphp

<div
    data-slot="item-actions"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
