@aware(["disabled" => false])

@php
    /**
     * Base Classes
     */
    $baseClasses = "bg-background text-foreground";
@endphp

<option {{ $attributes->twMerge($baseClasses) }} @disabled($disabled)>{{ $slot }}</option>
