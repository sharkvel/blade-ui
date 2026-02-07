<x-ui.tabs {{ $attributes }} defaultValue="preview">
    {{-- Tabs --}}
    <x-ui.tabs-container class="max-w-max">
        <x-ui.tabs-trigger value="preview">Preview</x-ui.tabs-trigger>
        <x-ui.tabs-trigger value="code">Code</x-ui.tabs-trigger>
    </x-ui.tabs-container>
    {{-- Contents --}}
    <div class="mt-2 grid grow grid-cols-1 grid-rows-1 rounded-lg border p-1 *:[grid-area:1/1]">
        <x-ui.tabs-content value="preview" class="flex min-h-112.5 items-center justify-center p-10">
            @include($example)
        </x-ui.tabs-content>
        <x-ui.tabs-content value="code" class="flex w-full overflow-hidden rounded-md">
            <x-ui.codelight example="{{ $example }}" class="h-112.5 w-full" />
        </x-ui.tabs-content>
    </div>
</x-ui.tabs>
