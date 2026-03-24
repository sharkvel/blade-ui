@props([
    'showCloseButton' => false,
])
@php
    $baseClasses = 'flex flex-col-reverse gap-2 sm:flex-row sm:justify-end';
@endphp

<div
    data-slot="dialog-footer"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}
    @if($showCloseButton)
        <x-ui.button variant="outline">Close</x-ui.button>
    @endif
</div>
