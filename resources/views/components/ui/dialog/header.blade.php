@php
    $baseClasses = 'flex flex-col gap-2';
@endphp

<div
    data-slot="dialog-header"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
