@aware(["open" => false])
@php
    /**
     * Base classes
     */
    $baseClasses = "contents";
@endphp

<div
    @if (! $open)
        x-cloak
    @endif
    x-show="open"
    {{ $attributes->twMerge($baseClasses) }}
>
    {{ $slot }}
</div>
