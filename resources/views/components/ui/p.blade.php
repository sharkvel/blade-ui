@php
    /**
     * Base Classes
     */
    $notFirst = preg_match("/\b(mt|my)-\S*/", $attributes["class"] ?? "") ? "" : "not-first:mt-6";
    $baseClasses = "text-base leading-relaxed $notFirst";
@endphp

<p {{ $attributes->twMerge($baseClasses) }}>{{ $slot }}</p>
