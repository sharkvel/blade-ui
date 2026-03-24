@php
    $baseClasses = 'group/avatar-group flex -space-x-2 *:data-[slot=avatar]:ring-2 *:data-[slot=avatar]:ring-background';
@endphp

<div
    data-slot="avatar-group"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
