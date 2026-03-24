@props([
    'showCloseButton' => true,
    'variant' => 'default',
])

@php
    $baseClasses = 'fixed top-1/2 left-1/2 z-50 grid max-h-[calc(100vh-1rem)] w-full max-w-[calc(100%-2rem)] -translate-1/2 gap-4 rounded-xl bg-background p-4 text-sm duration-100 outline-none data-closed:animate-out data-closed:fade-out-0 data-closed:zoom-out-95 data-open:animate-in data-open:fade-in-0 data-open:zoom-in-95 sm:max-w-sm';

    $variantClasses = match ($variant) {
        'default' => 'border border-foreground/18',
        'modern' => 'shadow-lg [box-shadow:0_10px_15px_-3px_rgb(0_0_0_/0.1),0_4px_6px_-4px_rgb(0_0_0_/0.1),0px_0px_0px_0.25rem_var(--color-neutral-200),0px_0px_0px_calc(0.25rem+1px)_var(--color-neutral-300)] dark:[box-shadow:0_10px_15px_-3px_rgb(0_0_0_/0.1),0_4px_6px_-4px_rgb(0_0_0_/0.1),0px_0px_0px_0.25rem_var(--color-neutral-900),0px_0px_0px_calc(0.25rem+1px)_var(--color-neutral-800)]',
    };
@endphp

<x-ui.dialog.portal data-slot="dialog-portal">
    <div x-show="open || closing">
        <x-ui.dialog.overlay @animationend="if (!open) closing = false" @click="open = false; closing = true" />
        <div
            data-slot="dialog-content"
            :data-open="open"
            :data-closed="!open"
            @click.stop
            x-trap="open"
            {{ $attributes
            ->except('class')
            ->merge([
                    'class' => cn($baseClasses, $variantClasses, $attributes->get('class')),
                ]) }}
        >{{ $slot }}
            @if($showCloseButton)
                <x-ui.dialog.close @click="open = false; closing = true" class="absolute top-2 right-2">
                    <x-ui.button variant="ghost" size="icon-sm">
                        <i data-lucide="x"></i>
                    </x-ui.button>
                </x-ui.dialog.close>
            @endif
        </div>
    </div>
</x-ui.dialog.portal>
