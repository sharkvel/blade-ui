@php
    /**
     * Base classes
     */
    $baseClasses = 'flex w-fit items-center gap-2 text-sm leading-snug font-medium group-data-[disabled=true]/field:opacity-50';
@endphp

<div data-slot="field-label" {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}}>{{ $slot }}</div>
