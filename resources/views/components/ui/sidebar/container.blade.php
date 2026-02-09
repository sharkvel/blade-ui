@php
    /**
     * Base Classes
     */
    $baseClasses = "flex min-h-svh bg-sidebar";
@endphp

<div x-data="{ open: window.innerWidth >= 768 }" {{ $attributes->twMerge($baseClasses) }}>
    <div class="h-0 md:w-3xs" :class="{'md:w-3xs':open}"></div>
    {{ $slot }}
</div>
