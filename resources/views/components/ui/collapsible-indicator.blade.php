<div {{ $attributes }}>
    <div :class="open ? 'rotate-180' : ''">
        @if ($slot->isNotEmpty())
            {{ $slot }}
        @else
            <i data-lucide="chevron-down" class="size-4"></i>
        @endif
    </div>
</div>