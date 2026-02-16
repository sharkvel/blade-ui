@props([
    'orientation' => 'vertical',
])
@php
    $baseClasses = 'relative m-0! self-stretch bg-input data-[orientation=vertical]:h-auto';
@endphp

<x-ui.separator
    data-slot="button-group-separator"
    orientation="{orientation}"
    {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}}
/>
