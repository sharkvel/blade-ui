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
        {{-- Switch --}}
        @include("components.examples.area.switch-variants")
        {{-- Select --}}
        @include("components.examples.area.select-variants")
        {{-- Typography --}}
        @include("components.examples.area.typography-variants")
        {{-- Tabs --}}
        @include("components.examples.area.tabs-variants")
        {{-- Collapsible --}}
        @include("components.examples.area.collapsible-variants")
        {{-- Table --}}
        @include("components.examples.area.table-variants")
        <x-ui.example-area title="Code light">
            <x-ui.codelight view="components.examples.area.plain-code" />
        </x-ui.example-area>
        <x-ui.example-area title="Sidebar">
            <iframe src="{{ route("live.sidebar") }}" class="w-full h-96 border rounded-md overflow-hidden"></iframe>
        </x-ui.example-area>
    </div>
</x-app-layout>
