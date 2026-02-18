@props([
    "orientation" => "vertical",
    "scrollbar" => "auto",
    //auto|visible|hidden"gutter" => "x",
    "gutter" => "x",
    //x|y|both|null,
    "mask" => false,
    "maskThreshold" => 1,
    "maskSize" => "80%",
    //1to100,
])

@php
    $baseClasses = "group/scrollbar relative overflow-hidden overscroll-contain transition-[color,box-shadow] outline-none has-focus-visible:ring-[3px] has-focus-visible:ring-ring/50";

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
            :class="{'mask-l-from-(--mask-size)':pctx > @js($maskThreshold) && haveScrollOnX && @js($orientation) === 'horizontal','mask-r-from-(--mask-size)':pctx < 100-@js($maskThreshold) && haveScrollOnX && @js($orientation) === 'horizontal','mask-t-from-(--mask-size)':pcty > @js($maskThreshold) && haveScrollOnY && @js($orientation) === 'vertical','mask-b-from-(--mask-size)':pcty < 100-@js($maskThreshold) && haveScrollOnY && @js($orientation) === 'vertical',}"
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
    <x-ui.scroll-area.scrollbar :orientation="$orientation" :scrollbar="$scrollbar" />
</div>
