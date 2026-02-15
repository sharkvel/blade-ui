@props([
    'for' => '',
])

@php
    /**
     * Base classes
     */
    $baseClasses =
        'group/field-label peer/field-label flex w-fit gap-2 leading-snug font-medium group-data-[disabled=true]/field:opacity-50 has-checked:border-primary has-checked:bg-primary/5 has-[>[data-slot=field]]:w-full has-[>[data-slot=field]]:flex-col has-[>[data-slot=field]]:rounded-md has-[>[data-slot=field]]:border *:data-[slot=field]:p-4 dark:has-checked:bg-primary/10';
@endphp

<x-ui.label
    data-slot="field-label"
    {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
        'for' => $for,
    ])
}}
>
    {{ $slot }}
</x-ui.label>
