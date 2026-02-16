@props([
    'value' => 30,
    'min' => 0,
    'max' => 100,
    'step' => 1,
])

@php
    /**
     * Base classes
     */
    $baseClasses = 'z-10 w-full appearance-none bg-transparent outline-none [grid-area:1/1] [&::-webkit-slider-thumb]:appearance-none';
    $fireFoxClasses = ' [&::-moz-range-thumb]:border-none [&::-moz-range-thumb]:bg-transparent';

    $sizeClasses = match ('default') {
        'default' => '[&::-moz-range-thumb]:size-4 [&::-webkit-slider-thumb]:size-4',
    };
@endphp

<div
    class="group relative grid grid-cols-1 grid-rows-1 items-center"
    x-data="{
        min: @js($min),
        max: @js($max),
        value: @js($value),
        get percent() {
            return ((this.value - this.min) / (this.max - this.min)) * 100
        },
    }"
>
    <input
        @input="value = +$el.value"
        x-modelable="value"
        type="range"
        min="{{ $min }}"
        max="{{ $max }}"
        value="{{ $value }}"
        step="{{ $step }}"
        {{
            $attributes->merge([
                'class' => cn($baseClasses, $fireFoxClasses, $sizeClasses, $attributes->get('class')),
            ])
        }}
    />
    {{-- Progress --}}
    <div
        class="relative z-1 flex h-1 w-(--range,0%) items-center justify-end rounded-l-full bg-primary will-change-[width] [grid-area:1/1]"
        :style="{'--range': percent+'%'}"
    >
        {{-- Thumb --}}
        <div
            class="pointer-events-none absolute left-full z-10 block size-3.5 shrink-0 -translate-x-(--_x) rounded-full border border-ring bg-white ring-ring/50 transition-[color,box-shadow] [grid-area:1/1] group-focus-within:ring-2 group-hover:ring-2"
            :class="{'ml-[0.5px]':percent>95}"
            :style="{'--_x': percent+'%'}"
        ></div>
    </div>
    {{-- Track --}}
    <div class="z-0 flex h-1 w-full rounded-full bg-muted [grid-area:1/1]"></div>
</div>
