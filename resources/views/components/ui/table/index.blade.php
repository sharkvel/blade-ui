@php
    $baseClasses = 'relative w-full caption-bottom overflow-hidden text-sm';
@endphp

<div class="hide-scrollbar relative grid w-full overflow-x-auto">
    <table
        {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
    >{{ $slot }}</table>
</div>
