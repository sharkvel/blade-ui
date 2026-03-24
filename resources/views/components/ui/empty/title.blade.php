@php
    $baseClasses = 'text-base font-medium tracking-tight';
@endphp

<div
    data-slot="empty-title"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
