@props([
    'src',
])

@php
    $baseClasses = 'aspect-square size-full rounded-full object-cover';
@endphp

<img
    data-slot="avatar-image"
    x-cloak
    x-init="if ($el.complete && $el.naturalWidth > 0) isLoaded = true"
    @load="isLoaded = true"
    src="{{ $src }}"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
/>
