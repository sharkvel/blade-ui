@php
    /**
     * Base Classes
     */
    $baseClasses = "contents";
@endphp

<div @click="open = !open" {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>
    {{ $slot }}
</div>
