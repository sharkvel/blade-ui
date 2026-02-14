@props([
    'size' => 'sm'
])
@php
    $baseClasses = 'flex-1 resize-none rounded-none border-0 bg-transparent py-3 shadow-none focus-visible:ring-0 dark:bg-transparent';
@endphp

<x-ui.textarea data-slot="input-group-control" size="{{ $size }}" {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}}>
    {{ $slot }}
</x-ui.textarea>
