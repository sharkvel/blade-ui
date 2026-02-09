<x-ui.example-area title="Tabs">
    <div class="space-y-6">
        <x-ui.tabs defaultValue="tab-1" class="max-w-max">
            <x-ui.tabs.container>
                <x-ui.tabs.trigger value="tab-1">Tab - 1</x-ui.tabs.trigger>
                <x-ui.tabs.trigger value="tab-2">Tab - 2</x-ui.tabs.trigger>
                <x-ui.tabs.trigger value="tab-3">Tab - 3</x-ui.tabs.trigger>
            </x-ui.tabs.container>
            <x-ui.tabs.content value="tab-1">Content - 1</x-ui.tabs.content>
            <x-ui.tabs.content value="tab-2">Content - 2</x-ui.tabs.content>
            <x-ui.tabs.content value="tab-3">Content - 3</x-ui.tabs.content>
        </x-ui.tabs>
        <x-ui.tabs defaultValue="tab-1" class="max-w-max">
            <x-ui.tabs.container variant="line">
                <x-ui.tabs.trigger value="tab-1">Tab - 1</x-ui.tabs.trigger>
                <x-ui.tabs.trigger value="tab-2">Tab - 2</x-ui.tabs.trigger>
                <x-ui.tabs.trigger value="tab-3">Tab - 3</x-ui.tabs.trigger>
            </x-ui.tabs.container>
            <x-ui.tabs.content value="tab-1">Content - 1</x-ui.tabs.content>
            <x-ui.tabs.content value="tab-2">Content - 2</x-ui.tabs.content>
            <x-ui.tabs.content value="tab-3">Content - 3</x-ui.tabs.content>
        </x-ui.tabs>
    </div>
</x-ui.example-area>
