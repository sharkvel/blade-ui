@php
    $thumbClasses = 'absolute rounded-full bg-border';
@endphp

<!-- Vertical track -->
<div
    @class([
        'absolute top-1.5 right-0 w-3 transition-opacity',
        'group-has-focus-visible/scrollbar:opacity-100!',
        'bottom-4' => $orientation === 'both',
        'bottom-1.5' => $orientation === 'vertical',
        'opacity-0 group-hover/scrollbar:opacity-100' => $scrollbar === 'auto',
        'hidden' => $scrollbar === 'hidden' || ! ($orientation === 'vertical' || $orientation === 'both'),
    ])
    :class="{'opacity-100': drag === 'y'}"
    x-ref="trackY"
    @mousedown="jumpY($event)"
>
    <div
        class="{{ cn('inset-x-0.75', $thumbClasses) }}"
        :class="{ dragging: drag === 'y' }"
        :style="{ top: ty + 'px', height: th + 'px' }"
        @mousedown.stop="startDrag('y', $event)"
    ></div>
</div>

<!-- Horizontal track -->
<div
    @class([
        'absolute bottom-0 left-1.5 h-3 transition-opacity',
        'right-4' => $orientation === 'both',
        'right-1.5' => $orientation === 'horizontal',
        'opacity-0 group-hover/scrollbar:opacity-100' => $scrollbar === 'auto',
        'hidden' => $scrollbar === 'hidden' || ! ($orientation === 'horizontal' || $orientation === 'both'),
    ])
    :class="{'opacity-100': drag === 'x'}"
    x-ref="trackX"
    @mousedown="jumpX($event)"
>
    <div
        class="{{ cn('inset-y-0.75', $thumbClasses) }}"
        :class="{ dragging: drag === 'x' }"
        :style="{ left: tx + 'px', width: tw + 'px' }"
        @mousedown.stop="startDrag('x', $event)"
    ></div>
</div>

<!-- Corder -->
@if ($orientation === 'both')
    <div class="absolute right-0 bottom-0 size-3"></div>
@endif
