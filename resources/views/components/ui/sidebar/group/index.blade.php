@php
    /**
     * Base Classes
     */
    $baseClasses = "p-2";
@endphp

<div {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</div>
