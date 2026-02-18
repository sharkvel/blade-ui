@php
    /**
     * Base Classes
     */
    $baseClasses = 'block text-sm';
@endphp

<small {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</small>
