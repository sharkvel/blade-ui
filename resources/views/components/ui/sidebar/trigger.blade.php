@php
    /**
     * Base Classes
     */
    $baseClasses = "contents";
@endphp

<div {{ $attributes->twMerge($baseClasses) }} @click="open = !open" data-trigger="sidebar">
    {{ $slot }}
</div>
