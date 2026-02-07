<x-app-layout>
    <x-ui.sidebar-container>
        {{-- Sidebar --}}
        <x-ui.sidebar>
            <x-ui.sidebar-header>
                <x-ui.sidebar-menu>
                    <x-ui.sidebar-menu-item>
                        <x-ui.sidebar-menu-button class="h-12">
                            <div class="flex size-8 items-center justify-center rounded-sm bg-blue-600">
                                <i data-lucide="command"></i>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-medium">Sharkvel</span>
                                <span class="text-xs text-muted-foreground">Enterprise</span>
                            </div>
                        </x-ui.sidebar-menu-button>
                    </x-ui.sidebar-menu-item>
                </x-ui.sidebar-menu>
            </x-ui.sidebar-header>
            <x-ui.sidebar-content>
                <x-ui.sidebar-group>
                    <x-ui.sidebar-group-label>Platform</x-ui.sidebar-group-label>
                    <x-ui.sidebar-group-content>
                        <x-ui.sidebar-menu>
                            <x-ui.sidebar-menu-item>
                                <x-ui.collapsible>
                                    <x-ui.collapsible-trigger>
                                        <x-ui.sidebar-menu-button>
                                            <i data-lucide="square-terminal"></i>
                                            Playground
                                            <x-ui.collapsible-indicator />
                                        </x-ui.sidebar-menu-button>
                                    </x-ui.collapsible-trigger>
                                    <x-ui.collapsible-content>
                                        <x-ui.sidebar-menu-sub>
                                            <x-ui.sidebar-menu-sub-item>
                                                <x-ui.sidebar-menu-sub-button>History</x-ui.sidebar-menu-sub-button>
                                                <x-ui.sidebar-menu-sub-button>Starred</x-ui.sidebar-menu-sub-button>
                                                <x-ui.sidebar-menu-sub-button>Settings</x-ui.sidebar-menu-sub-button>
                                            </x-ui.sidebar-menu-sub-item>
                                        </x-ui.sidebar-menu-sub>
                                    </x-ui.collapsible-content>
                                </x-ui.collapsible>
                            </x-ui.sidebar-menu-item>
                            <x-ui.sidebar-menu-item>
                                <x-ui.collapsible>
                                    <x-ui.collapsible-trigger>
                                        <x-ui.sidebar-menu-button>
                                            <i data-lucide="bot"></i>
                                            Models
                                            <x-ui.collapsible-indicator />
                                        </x-ui.sidebar-menu-button>
                                    </x-ui.collapsible-trigger>
                                    <x-ui.collapsible-content>
                                        <x-ui.sidebar-menu-sub>
                                            <x-ui.sidebar-menu-sub-item>
                                                <x-ui.sidebar-menu-sub-button>Genesis</x-ui.sidebar-menu-sub-button>
                                                <x-ui.sidebar-menu-sub-button>Explorer</x-ui.sidebar-menu-sub-button>
                                            </x-ui.sidebar-menu-sub-item>
                                        </x-ui.sidebar-menu-sub>
                                    </x-ui.collapsible-content>
                                </x-ui.collapsible>
                            </x-ui.sidebar-menu-item>
                        </x-ui.sidebar-menu>
                    </x-ui.sidebar-group-content>
                </x-ui.sidebar-group>
                <x-ui.sidebar-group>
                    <x-ui.sidebar-group-label>Projects</x-ui.sidebar-group-label>
                    <x-ui.sidebar-group-content>
                        <x-ui.sidebar-menu>
                            <x-ui.sidebar-menu-item>
                                <x-ui.sidebar-menu-button>
                                    <i data-lucide="chart-pie"></i>
                                    Sales & Marketing
                                </x-ui.sidebar-menu-button>
                            </x-ui.sidebar-menu-item>
                            <x-ui.sidebar-menu-item>
                                <x-ui.sidebar-menu-button>
                                    <i data-lucide="map"></i>
                                    Travel
                                </x-ui.sidebar-menu-button>
                            </x-ui.sidebar-menu-item>
                        </x-ui.sidebar-menu>
                    </x-ui.sidebar-group-content>
                </x-ui.sidebar-group>
            </x-ui.sidebar-content>
            <x-ui.sidebar-footer>
                <x-ui.sidebar-menu>
                    <x-ui.sidebar-menu-item>
                        <x-ui.sidebar-menu-button>
                            <i data-lucide="settings"></i>
                            Settings
                        </x-ui.sidebar-menu-button>
                    </x-ui.sidebar-menu-item>
                </x-ui.sidebar-menu>
            </x-ui.sidebar-footer>
        </x-ui.sidebar>
        {{-- Content --}}
        <div class="grow">
            <div class="flex h-16 items-center px-4">
                <x-ui.sidebar-trigger>
                    <x-ui.button variant="ghost" size="icon">
                        <i data-lucide="panel-left"></i>
                    </x-ui.button>
                </x-ui.sidebar-trigger>
            </div>
        </div>
    </x-ui.sidebar-container>
</x-app-layout>
