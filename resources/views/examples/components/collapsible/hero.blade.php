<x-ui.collapsible class="flex w-2xs flex-col">
    <div class="flex items-center justify-between">
        <x-ui.p class="font-medium">What is MVC architecture?</x-ui.p>
        <x-ui.collapsible.trigger>
            <x-ui.button variant="ghost" size="icon">
                <i data-lucide="chevrons-up-down"></i>
            </x-ui.button>
        </x-ui.collapsible.trigger>
    </div>
    <x-ui.collapsible.content>
        <x-ui.p>
            MVC stands for Model-View-Controller. The Model manages the application's data and business logic, the View handles the presentation layer
            (UI), and the Controller acts as an intermediary, processing user input and returning the appropriate response.
        </x-ui.p>
    </x-ui.collapsible.content>
</x-ui.collapsible>
