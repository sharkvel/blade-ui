@props([
    'open' => false,
])
<div
    x-data="{
        open: @js($open),
    }"
    :open="open"
    data-slot="dialog"
    x-init="
        $watch('open', (value) =>
            value ? $store.scrollbar.lock() : $store.scrollbar.unlock(),
        )
    "
    {{ $attributes }}
>
    {{ $slot }}
</div>
