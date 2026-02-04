<div class="relative">
    <select {{ $attributes }}>
        @if (! empty($placeholder))
            <option value="" selected disabled hidden>{{ $placeholder }}</option>
        @endif

        {{ $slot }}
    </select>
    <i data-lucide="chevrons-up-down" class="pointer-events-none absolute top-1/2 right-2.5 size-4 -translate-y-1/2"></i>
</div>
