@aware(["disabled" => false])

@php
    /**
     * Base Classes
     */
    $baseClasses = "bg-background text-foreground";
@endphp

<option
    {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}
    @disabled($disabled)
>
    {{ $slot }}
</option>
