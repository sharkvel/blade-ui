@php
    /**
     * Base Classes
     */
    $baseClasses = 'h-10 px-4 text-left align-middle font-medium whitespace-nowrap text-foreground [&:has([role=checkbox])]:pr-0 *:[[role=checkbox]]:translate-y-0.5';
@endphp

<th {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</th>
