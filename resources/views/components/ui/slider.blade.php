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
    $baseClasses = 'z-10 w-full appearance-none bg-transparent [grid-area:1/1] [&::-webkit-slider-thumb]:appearance-none';
    $fireFoxClasses = ' [&::-moz-range-thumb]:border-none [&::-moz-range-thumb]:bg-transparent';

    $sizeClasses = match ('default') {
        'default' => '[&::-moz-range-thumb]:size-4 [&::-webkit-slider-thumb]:size-4',
    };
@endphp

<div
    class="relative grid grid-cols-1 grid-rows-1 items-center"
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
        x-model="value"
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
    <div class="pointer-events-none z-10 size-4 bg-red-500 [grid-area:1/1] hover:bg-blue-300"></div>
    <div class="z-1 flex h-1 w-(--range,0%) rounded-full bg-primary will-change-[width] [grid-area:1/1]" :style="{'--range': percent+'%'}"></div>
    <div class="z-0 flex h-1 w-full rounded-full bg-muted [grid-area:1/1]"></div>
</div>
