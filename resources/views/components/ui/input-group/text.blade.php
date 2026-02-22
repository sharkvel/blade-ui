@php
    $baseClasses = "text-muted-foreground flex items-center gap-2 text-sm [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4";
@endphp

<span {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}}>
    {{ $slot }}
</span>
