@php
    /**
     * Base Classes
     */
    $baseClasses = "[&_tr:last-child]:border-0";
@endphp

<tbody {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</tbody>
