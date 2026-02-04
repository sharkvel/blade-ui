@aware(["disabled" => false])
<option {{ $attributes }} {{ $disabled ? "disabled" : "" }}>{{ $slot }}</option>
