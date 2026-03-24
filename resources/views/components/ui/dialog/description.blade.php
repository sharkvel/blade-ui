@php
    $baseClasses = 'text-sm text-muted-foreground';
@endphp

<div
    data-slot="dialog-description"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
