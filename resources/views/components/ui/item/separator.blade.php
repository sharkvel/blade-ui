<x-ui.separator
    data-slot="item-separator"
    orientation="horizontal"
    {{
    $attributes->merge([
        'class' => cn('my-0', $attributes->get('class')),
    ])
}}
/>
