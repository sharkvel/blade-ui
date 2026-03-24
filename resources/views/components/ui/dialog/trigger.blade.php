@props([
    "shortcut" => null,
    "enableEsc" => false,
])
<div
    data-slot="dialog-trigger"
    @click="open = true"
    @if(filled($shortcut))
        @keydown.{{ $shortcut }}.window.prevent="$el.click()"
    @endif
    @if($enableEsc)
        @keydown.esc.window.prevent="if (open) { open = false; closing = true; }"
    @endif
    {{ $attributes }}
>{{ $slot }}</div>
