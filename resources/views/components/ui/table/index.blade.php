@php
    /**
     * Base Classes
     */
    $baseClasses = 'relative w-full caption-bottom overflow-hidden text-sm';
@endphp

<div class="hide-scrollbar relative grid w-full overflow-x-auto">
    <table {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</table>
</div>
