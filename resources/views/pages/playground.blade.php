<x-app-layout>
    <x-ui.input-group>
                                <x-ui.input-group.input class="pl-5" placeholder="example.com" />
                                <x-ui.input-group.addon>https://</x-ui.input-group.addon>
                                <x-ui.input-group.addon align="inline-end">
                                    <x-ui.input-group.button size="icon-xs" class="rounded-full">
                                        <i data-lucide="circle-alert"></i>
                                    </x-ui.input-group.button>
                                </x-ui.input-group.addon>
                            </x-ui.input-group>
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
