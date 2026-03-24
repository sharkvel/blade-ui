@php
    $baseClasses = 'group/field-content flex flex-1 flex-col gap-1.5 leading-snug';
@endphp

<div
    data-slot="field-content"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
