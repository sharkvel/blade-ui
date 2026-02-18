@php
    /**
     * Base Classes
     */
    $baseClasses = 'contents';
@endphp

<div
    {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
    @click="open = !open"
    data-trigger="sidebar"
>
    {{ $slot }}
</div>
