@php
    $baseClasses = 'flex-1 rounded-none border-0 bg-transparent focus-visible:ring-0 dark:bg-transparent';
@endphp

<x-ui.input data-slot="input-group-control" {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}} />
