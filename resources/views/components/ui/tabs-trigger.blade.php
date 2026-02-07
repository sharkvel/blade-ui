@aware(["defaultValue"])
<button
    {{ $attributes }}
    @click="tab='{{ $value }}'"
    data-state="{{ $value === $defaultValue ? "active" : "inactive" }}"
    :data-state="tab === '{{ $value }}' ? 'active' : 'inactive'"
>
    {{ $slot }}
</button>