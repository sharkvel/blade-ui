@php
    /**
     * Base classes
     */
    $baseClasses = ' flex w-full max-w-sm min-w-0 flex-col items-center gap-4 text-sm text-balance';
@endphp

<div
    data-slot="empty-content"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
