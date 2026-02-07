@aware(["defaultValue"])
@if ($defaultValue === $value)
    <div {{ $attributes }} x-show="tab === '{{ $value }}'">
        {{ $slot }}
    </div>
@else
    <div x-cloak {{ $attributes }} x-show="tab === '{{ $value }}'">
        {{ $slot }}
    </div>
@endif