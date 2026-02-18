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

@pushOnce("js")
<script>
    document.addEventListener(
        'alpine:init',
        () => {
            Alpine.data('scrollbar', () => ({
                // thumb geometry
                ty: 0,
                th: 40, // top,  height  (vertical)
                tx: 0,
                tw: 40, // left, width   (horizontal)
                pctx: 0, // Percentage of x scroll
                pcty: 0, // Percentage of y scroll
                haveScrollOnX: false,
                haveScrollOnY: false,

                // drag state
                drag: null, // 'y' | 'x' | null
                startMouse: 0,
                startScroll: 0,

                init() {
                    this.$nextTick(() => this.update());
                    new ResizeObserver(() => this.update()).observe(this.$refs.host);
                    window.addEventListener('mousemove', (e) => this.onMove(e));
                    window.addEventListener('mouseup', () => (this.drag = null));
                },

                update() {
                    const h = this.$refs.host;
                    const ty = this.$refs.trackY,
                        tx = this.$refs.trackX;

                    // vertical
                    const ratioY = h.clientHeight / h.scrollHeight;
                    const maxScrollY = h.scrollHeight - h.clientHeight;
                    this.th = Math.max(24, ratioY * ty.clientHeight);
                    this.ty = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * (ty.clientHeight - this.th) || 0;

                    this.pcty = maxScrollY > 0 ? (h.scrollTop / maxScrollY) * 100 : 0;
                    this.haveScrollOnY = ratioY !== 1;

                    // horizontal
                    const ratioX = h.clientWidth / h.scrollWidth;
                    const maxScrollX = h.scrollWidth - h.clientWidth;
                    this.tw = Math.max(24, ratioX * tx.clientWidth);
                    this.tx = (h.scrollLeft / (h.scrollWidth - h.clientWidth)) * (tx.clientWidth - this.tw) || 0;

                    this.pctx = maxScrollX > 0 ? (h.scrollLeft / maxScrollX) * 100 : 0;
                    this.haveScrollOnX = ratioX !== 1;
                },

                // native scroll → move thumbs
                onScroll() {
                    this.update();
                },

                // thumb drag start
                startDrag(axis, e) {
                    this.drag = axis;
                    this.startMouse = axis === 'y' ? e.clientY : e.clientX;
                    this.startScroll = axis === 'y' ? this.$refs.host.scrollTop : this.$refs.host.scrollLeft;
                    e.preventDefault();
                },

                // thumb drag move
                onMove(e) {
                    if (!this.drag) return;
                    const h = this.$refs.host;
                    const axis = this.drag;
                    const track = axis === 'y' ? this.$refs.trackY : this.$refs.trackX;
                    const thumb = axis === 'y' ? this.th : this.tw;
                    const delta = (axis === 'y' ? e.clientY : e.clientX) - this.startMouse;
                    const maxTrack = (axis === 'y' ? track.clientHeight : track.clientWidth) - thumb;
                    const maxScroll = axis === 'y' ? h.scrollHeight - h.clientHeight : h.scrollWidth - h.clientWidth;
                    const newScroll = this.startScroll + (delta / maxTrack) * maxScroll;
                    if (axis === 'y') h.scrollTop = Math.max(0, Math.min(maxScroll, newScroll));
                    else h.scrollLeft = Math.max(0, Math.min(maxScroll, newScroll));
                    e.preventDefault();
                },

                // track click → jump
                jumpY(e) {
                    const h = this.$refs.host,
                        t = this.$refs.trackY;
                    const ratio = (e.clientY - t.getBoundingClientRect().top - this.th / 2) / (t.clientHeight - this.th);
                    h.scrollTop = Math.max(0, Math.min(1, ratio)) * (h.scrollHeight - h.clientHeight);
                },
                jumpX(e) {
                    const h = this.$refs.host,
                        t = this.$refs.trackX;
                    const ratio = (e.clientX - t.getBoundingClientRect().left - this.tw / 2) / (t.clientWidth - this.tw);
                    h.scrollLeft = Math.max(0, Math.min(1, ratio)) * (h.scrollWidth - h.clientWidth);
                },
            }));
        },
        { once: true },
    );
</script>
@endPushOnce
