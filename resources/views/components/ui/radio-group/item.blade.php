@props([
    'value',
])
@aware(['defaultValue' => null, 'name'])

<x-ui.radio
    data-slot="radio-group-item"
    name="{{ $name }}"
    {{
    $attributes->merge([
        'checked' => $defaultValue === $value,
        'value' => $value,
    ])
}}
/>
