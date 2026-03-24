@php
    $baseClasses = 'text-base leading-none font-semibold';
@endphp

<div
    data-slot="dialog-title"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
