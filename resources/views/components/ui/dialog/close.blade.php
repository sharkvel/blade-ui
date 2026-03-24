<div
    {{ $attributes }}
    data-slot="dialog-close"
    @click="open = false; closing = true"
>
    {{ $slot }}
</div>
