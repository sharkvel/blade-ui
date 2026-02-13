@php
    /**
     * Base classes
     */
    $baseClasses = 'flex min-w-0 flex-1 flex-col items-center justify-center gap-6 rounded-lg border-dashed p-6 text-center text-balance md:p-12';
@endphp

<div data-slot="empty" {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}}>{{ $slot }}</div>
