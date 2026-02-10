<x-app-layout>
    @php
        $start = now();
    @endphp

    @for ($i=0;$i<1000;$i++)
        <x-ui.button class="shrink">Button {{ $i }}</x-ui.button>
    @endfor

    @php
        echo $start->diffInMilliseconds(now());
    @endphp
</x-app-layout>
