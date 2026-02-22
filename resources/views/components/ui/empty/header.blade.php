@php
    /**
     * Base classes
     */
    $baseClasses = 'flex max-w-sm flex-col items-center gap-2 text-center';
@endphp

<div data-slot="empty-header" {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>
    {{ $slot }}
</div>
