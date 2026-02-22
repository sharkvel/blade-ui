@php
    /**
     * Base classes
     */
    $baseClasses = 'relative -my-2 min-h-5 text-sm';
@endphp

<div
    data-slot="field-separator"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    <x-ui.separator class="absolute inset-0 top-1/2" />
    @if ($slot)
        <span
            class="relative mx-auto block w-fit bg-background px-2 text-muted-foreground"
            data-slot="field-separator-content"
        >
            {{ $slot }}
        </span>
    @endif
</div>
