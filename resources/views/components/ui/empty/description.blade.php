@php
    /**
     * Base classes
     */
    $baseClasses =
        'text-sm/relaxed text-muted-foreground [&>a]:underline [&>a]:underline-offset-4 [&>a:hover]:text-primary';
@endphp

<div
    data-slot="empty-description"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
