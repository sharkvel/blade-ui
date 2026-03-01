@props([
    'showCloseButton' => true,
])

@php
    $baseClasses = 'fixed top-1/2 left-1/2 z-50 grid w-full max-w-[calc(100%-2rem)] -translate-1/2 gap-4 rounded-xl border border-foreground/18 bg-background p-4 text-sm duration-100 outline-none data-closed:animate-out data-closed:fade-out-0 data-closed:zoom-out-95 data-open:animate-in data-open:fade-in-0 data-open:zoom-in-95 sm:max-w-sm';
@endphp

<x-ui.dialog.portal data-slot="dialog-portal">
    <div x-show="open || closing">
        <x-ui.dialog.overlay @animationend="if (!open) closing = false;" @click="open = false; closing = true;" />
        <div
            data-slot="dialog-content"
            :data-open="open"
            :data-closed="!open"
            @click.stop
            {{
                $attributes->merge([
                    'class' => cn($baseClasses, $attributes->get('class')),
                ])
            }}
        >
            {{ $slot }}
            @if ($showCloseButton)
                <x-ui.dialog.close @click="open = false; closing = true;">
                    <x-ui.button variant="ghost" size="icon">
                        <i data-lucide="x"></i>
                    </x-ui.button>
                </x-ui.dialog.close>
            @endif
        </div>
    </div>
</x-ui.dialog.portal>
