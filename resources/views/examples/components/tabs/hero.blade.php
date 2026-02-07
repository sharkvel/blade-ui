<x-ui.tabs defaultValue="overview" class="w-96">
    {{-- Tabs --}}
    <x-ui.tabs-container class="max-w-max">
        <x-ui.tabs-trigger value="overview">Overview</x-ui.tabs-trigger>
        <x-ui.tabs-trigger value="analytics">Analytics</x-ui.tabs-trigger>
        <x-ui.tabs-trigger value="reports">Reports</x-ui.tabs-trigger>
    </x-ui.tabs-container>
    {{-- Content --}}
    <x-ui.tabs-content value="overview">
        <div class="rounded-lg border p-4">
            <x-ui.p class="font-medium">Overview</x-ui.p>
            <x-ui.p class="mt-2 text-sm text-muted-foreground">
                View your key metrics and recent project activity. Track progress across all your active projects. You have 12 active projects and 3
                pending tasks.
            </x-ui.p>
        </div>
    </x-ui.tabs-content>
    <x-ui.tabs-content value="analytics">
        <div class="rounded-lg border p-4">
            <x-ui.p class="font-medium">Analytics</x-ui.p>
            <x-ui.p class="mt-2 text-sm text-muted-foreground">
                Track performance and user engagement metrics. Monitor trends and identify growth opportunities. Page views are up 25% compared to
                last month.
            </x-ui.p>
        </div>
    </x-ui.tabs-content>
    <x-ui.tabs-content value="reports">
        <div class="rounded-lg border p-4">
            <x-ui.p class="font-medium">Reports</x-ui.p>
            <x-ui.p class="mt-2 text-sm text-muted-foreground">
                Generate and download your detailed reports. Export data in multiple formats for analysis. You have 5 reports ready and available to
                export.
            </x-ui.p>
        </div>
    </x-ui.tabs-content>
</x-ui.tabs>
