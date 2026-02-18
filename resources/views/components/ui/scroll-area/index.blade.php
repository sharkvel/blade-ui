@props([
    "variant" => "default",
    "orientation" => "vertical",
    "scrollbar" => "auto",
    "gutter" => "x",
    //x|y|both|null,
    "mask" => false,
    "maskShowThreshold" => 1,
    "maskSize" => "80%",
    //1to100,
])

@php
    $baseClasses = "group/scrollbar relative overflow-hidden overscroll-contain transition-[color,box-shadow] outline-none has-focus-visible:ring-[3px] has-focus-visible:ring-ring/50";
    $thumbClasses = "absolute rounded-full bg-border";

    $variant = match ($variant) {
        "default" => "",
    };

    $orientationClasses = match ($orientation) {
        "vertical" => "overflow-y-scroll",
        "horizontal" => "overflow-x-scroll",
        "both" => "overflow-scroll",
    };

    $gutterClasses = match ($gutter) {
        "x" => "px-3",
        "y" => "py-3",
        "both" => "p-3",
        default => "p-0",
    };
@endphp

<div
    x-data="scrollbar()"
    x-init="init()"
    {{
        $attributes->merge([
            "class" => cn($baseClasses, $attributes->get("class")),
        ])
    }}
>
    <div
        data-slot="scroll-area"
        data-orientation="{{ $orientation }}"
        data-scrollbar="{{ $scrollbar }}"
        x-ref="host"
        class="{{ cn("relative size-full [scrollbar-width:none] [&::-webkit-scrollbar]:hidden outline-none", $orientationClasses, $gutterClasses) }}"
        @if ($mask)
            :class="{'mask-l-from-(--mask-size)':pctx > @js($maskShowThreshold) && @js($orientation) === 'horizontal','mask-r-from-(--mask-size)':pctx < 100-@js($maskShowThreshold) && @js($orientation) === 'horizontal','mask-t-from-(--mask-size)':pcty > @js($maskShowThreshold) && @js($orientation) === 'vertical','mask-b-from-(--mask-size)':pcty < 100-@js($maskShowThreshold) && @js($orientation) === 'vertical',}"
        @endif
        style="--mask-size: {{ $maskSize }}"
        @scroll="onScroll()"
    >
        <div
            data-slot="scroll-area-viewport"
            class="rounded-[inherit] transition-[color,box-shadow] outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50"
        >
            {{ $slot }}
        </div>
    </div>
    <!-- Vertical track -->
    <div
        @class([
            "absolute top-1.5 right-0 w-3 transition-opacity",
            "group-has-focus-visible/scrollbar:opacity-100!",
            "bottom-4" => $orientation === "both",
            "bottom-1.5" => $orientation === "vertical",
            "opacity-0 group-hover/scrollbar:opacity-100" => $scrollbar === "auto",
            "hidden" =>
                $scrollbar === "hidden" ||
                ! ($orientation === "vertical" || $orientation === "both"),
        ])
        :class="{'opacity-100': drag === 'y'}"
        x-ref="trackY"
        @mousedown="jumpY($event)"
    >
        <div
            class="{{ cn("inset-x-0.75", $thumbClasses) }}"
            :class="{ dragging: drag === 'y' }"
            :style="{ top: ty + 'px', height: th + 'px' }"
            @mousedown.stop="startDrag('y', $event)"
        ></div>
    </div>

    <!-- Horizontal track -->
    <div
        @class([
            "absolute bottom-0 left-1.5 h-3 transition-opacity",
            "right-4" => $orientation === "both",
            "right-1.5" => $orientation === "horizontal",
            "opacity-0 group-hover/scrollbar:opacity-100" => $scrollbar === "auto",
            "hidden" =>
                $scrollbar === "hidden" ||
                ! ($orientation === "horizontal" || $orientation === "both"),
        ])
        :class="{'opacity-100': drag === 'x'}"
        x-ref="trackX"
        @mousedown="jumpX($event)"
    >
        <div
            class="{{ cn("inset-y-0.75", $thumbClasses) }}"
            :class="{ dragging: drag === 'x' }"
            :style="{ left: tx + 'px', width: tw + 'px' }"
            @mousedown.stop="startDrag('x', $event)"
        ></div>
    </div>

    <!-- Corder -->
    @if ($orientation === "both")
        <div class="absolute right-0 bottom-0 size-3"></div>
    @endif
</div>
