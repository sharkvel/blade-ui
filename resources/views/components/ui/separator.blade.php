@if ($orientation === "vertical")
    <vr {{ $attributes }}></vr>
@else
    <hr {{ $attributes }} />
@endif
