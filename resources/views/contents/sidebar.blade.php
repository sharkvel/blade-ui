<x-ui.sidebar.container>
    {{-- Sidebar --}}
    <x-ui.sidebar class="border-r">
        {{-- Sidebar header --}}
        <x-ui.sidebar.header>
            <div class="p-2">Header</div>
        </x-ui.sidebar.header>
        {{-- Sidebar content --}}
        <x-ui.sidebar.content>
            {{-- Group --}}
            <x-ui.sidebar.group>
                {{-- Group label --}}
                <x-ui.sidebar.group.label>Pages</x-ui.sidebar.group.label>
                {{-- Group content --}}
                <x-ui.sidebar.group.content>
                    {{-- Menu --}}
                    <x-ui.sidebar.menu>
                        {{-- Menu item --}}
                        <x-ui.sidebar.menu.item>
                            {{-- Menu button --}}
                            <x-ui.sidebar.menu.button data-active="true">
                                <i data-lucide="life-buoy"></i>
                                Support
                            </x-ui.sidebar.menu.button>
                        </x-ui.sidebar.menu.item>
                        {{-- Menu item --}}
                        <x-ui.sidebar.menu.item>
                            {{-- Collapsible --}}
                            <x-ui.collapsible>
                                {{-- Collapsible trigger --}}
                                <x-ui.collapsible.trigger>
                                    <x-ui.sidebar.menu.button>
                                        <i data-lucide="settings"></i>
                                        Settings
                                        <x-ui.collapsible.indicator />
                                    </x-ui.sidebar.menu.button>
                                </x-ui.collapsible.trigger>
                                {{-- Collapsible content --}}
                                <x-ui.collapsible.content>
                                    <x-ui.sidebar.menu.sub>
                                        <x-ui.sidebar.menu.sub.item>
                                            <x-ui.sidebar.menu.sub.button>General</x-ui.sidebar.menu.sub.button>
                                        </x-ui.sidebar.menu.sub.item>
                                        <x-ui.sidebar.menu.sub.item>
                                            <x-ui.sidebar.menu.sub.button>Profile</x-ui.sidebar.menu.sub.button>
                                        </x-ui.sidebar.menu.sub.item>
                                        <x-ui.sidebar.menu.sub.item>
                                            <x-ui.sidebar.menu.sub.button>Security</x-ui.sidebar.menu.sub.button>
                                        </x-ui.sidebar.menu.sub.item>
                                        <x-ui.sidebar.menu.sub.item>
                                            <x-ui.sidebar.menu.sub.button>Account</x-ui.sidebar.menu.sub.button>
                                        </x-ui.sidebar.menu.sub.item>
                                    </x-ui.sidebar.menu.sub>
                                </x-ui.collapsible.content>
                            </x-ui.collapsible>
                        </x-ui.sidebar.menu.item>
                        {{-- Menu item --}}
                        <x-ui.sidebar.menu.item>
                            <x-ui.sidebar.menu.button data-active="false">
                                <i data-lucide="message-square"></i>
                                Feedback
                            </x-ui.sidebar.menu.button>
                        </x-ui.sidebar.menu.item>
                    </x-ui.sidebar.menu>
                </x-ui.sidebar.group.content>
            </x-ui.sidebar.group>
        </x-ui.sidebar.content>
        {{-- Sidebar footer --}}
        <x-ui.sidebar.footer>
            <div class="p-2">Footer</div>
        </x-ui.sidebar.footer>
    </x-ui.sidebar>
    <div class="flex grow flex-col">
        <div class="flex h-14 items-center px-4">
            <x-ui.sidebar.trigger class="ms-auto">
                <x-ui.button variant="ghost" size="icon"><i data-lucide="panel-left"></i></x-ui.button>
            </x-ui.sidebar.trigger>
        </div>
    </div>
</x-ui.sidebar.container>