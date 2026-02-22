@props([
    'orientation' => 'vertical',
])

@php
    /**
     * Base classes
     */
    $baseClasses = 'group/field flex w-full gap-2 data-[invalid=true]:text-destructive';

    /**
     * Orientation classes
     */
    $orientationClasses = match ($orientation) {
        'vertical' => 'flex-col *:w-full [&>.sr-only]:w-auto',
        'horizontal' => 'flex-row items-center has-[>[data-slot=field-content]]:items-start *:data-[slot=field-label]:flex-auto has-[>[data-slot=field-content]]:[&>[role=checkbox],[role=radio]]:mt-px',
        'responsive' => 'flex-col *:w-full @md/field-group:flex-row @md/field-group:items-center @md/field-group:*:w-auto @md/field-group:has-[>[data-slot=field-content]]:items-start @md/field-group:*:data-[slot=field-label]:flex-auto [&>.sr-only]:w-auto @md/field-group:has-[>[data-slot=field-content]]:[&>[role=checkbox],[role=radio]]:mt-px',
    };
@endphp

<div
    role="group"
    data-slot="field"
    {{ $attributes->merge(['class' => cn($baseClasses, $orientationClasses, $attributes->get('class'))]) }}
>
    {{ $slot }}
</div>
