@php
    /**
     * Base Classes
     */
    $baseClasses = "flex grow flex-col gap-2 overflow-auto";
@endphp

<div {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</div>
