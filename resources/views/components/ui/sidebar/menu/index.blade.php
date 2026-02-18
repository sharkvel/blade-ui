@php
    /**
     * Base Classes
     */
    $baseClasses = 'flex w-full flex-col gap-1';
@endphp

<ul {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>
    {{ $slot }}
</ul>
