@php
    /**
     * Base Classes
     */
    $baseClasses = "mx-3.5 flex flex-col gap-1 border-l border-sidebar-border px-2.5 py-0.5";
@endphp

<ul {{ $attributes->twMerge($baseClasses) }}>
    {{ $slot }}
</ul>
