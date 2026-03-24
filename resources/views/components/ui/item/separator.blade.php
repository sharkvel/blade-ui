<x-ui.separator
    data-slot="item-separator"
    orientation="horizontal"
    {{ $attributes
    ->except('class')
    ->merge([
        'class' => cn('my-0', $attributes->get('class')),
    ], escape: false) }}
/>
