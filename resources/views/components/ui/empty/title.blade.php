@php
    /**
     * Base classes
     */
    $baseClasses = 'text-lg font-medium tracking-tight';
@endphp

<div data-slot="empty-title" {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}}>{{ $slot }}</div>
