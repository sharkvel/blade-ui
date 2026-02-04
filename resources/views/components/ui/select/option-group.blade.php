@props([
    "label" => "",
    "disabled" => false,
])
<div {{ $disabled ? "disabled" : "" }}>
    <option {{ $attributes }} value="" disabled>{{ $label }}</option>
    {{ $slot }}
</div>
