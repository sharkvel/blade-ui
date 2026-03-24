@props([
    'open' => false,
])
<div
    x-data="{
        open: @js($open),
        closing: false,
    }"
    :open="open"
    data-slot="dialog"
    x-effect="open ? $store.scrollbar.lock() : !open && !closing && $store.scrollbar.unlock()"
    {{ $attributes }}
>
    {{ $slot }}
</div>
