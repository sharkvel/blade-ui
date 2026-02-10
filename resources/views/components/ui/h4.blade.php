@php
    /**
     * Base Classes
     */
    $baseClasses = "text-2xl";
@endphp

<h4 {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</h4>
