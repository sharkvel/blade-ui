@php
    /**
     * Base Classes
     */
    $baseClasses = 'px-4 py-2 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 *:[[role=checkbox]]:translate-y-0.5';
@endphp

<td {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</td>
