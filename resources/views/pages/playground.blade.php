<x-app-layout>
    <div class="grid grid-cols-2 gap-6 p-4">
        {{-- Button --}}
        @include("components.examples.area.button-variants")
        {{-- Input --}}
        @include("components.examples.area.input-variants")
        {{-- Checkbox --}}
        @include("components.examples.area.checkbox-variants")
        {{-- Radio --}}
        @include("components.examples.area.radio-variants")
        {{-- Select --}}
        @include("components.examples.area.select-variants")
        {{-- Typography --}}
        @include("components.examples.area.typography-variants")
        {{-- Tabs --}}
        @include("components.examples.area.tabs-variants")
        <x-ui.example-area title="Code light">
            <x-ui.codelight view="components.examples.area.plain-code" />
        </x-ui.example-area>
    </div>
</x-app-layout>
