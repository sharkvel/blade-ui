@php
    /**
     * Base Classes
     */
    $baseClasses = "contents";
@endphp

<div @click="open = !open" {{ $attributes->twMerge($baseClasses) }}>
    {{ $slot }}
</div>
