@php
    /**
     * Base Classes
     */
    $baseClasses = "flex w-full flex-col gap-1";
@endphp

<ul {{ $attributes->twMerge($baseClasses) }}>
    {{ $slot }}
</ul>
