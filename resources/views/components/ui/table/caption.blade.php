@php
    /**
     * Base Classes
     */
    $baseClasses = 'mt-4 text-sm text-muted-foreground';
@endphp

<caption {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</caption>
