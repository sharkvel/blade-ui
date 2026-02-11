@php
    $theme = $_GET["theme"] ?? "neutral";
@endphp

<x-app-layout>
    @push("css")
        <link rel="stylesheet" href="{{ asset("css/themes/blue.css") }}" />
        <link rel="stylesheet" href="{{ asset("css/themes/yellow.css") }}" />
        <link rel="stylesheet" href="{{ asset("css/themes/neutral.css") }}" />
    @endpush

    <x-nav-bar :sidebar-items="$sidebarItems" />
    <div class="h-16"></div>
    <div class="section-wrapper mx-auto flex min-h-[calc(100svh-4rem)] w-full flex-col items-center border-x-0 py-12 md:border-x">
        {{-- Powered by --}}
        <div class="mx-auto mt-24 flex gap-x-8 text-center text-muted-foreground">
            <a href="https://tailwindcss.com/" target="_blank">
                <div class="flex items-center gap-2 font-medium hover:text-foreground">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="currentColor">
                        <path
                            d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"
                        />
                    </svg>
                    <p class="text-sm">Tailwind CSS</p>
                </div>
            </a>
            <a href="https://alpinejs.dev/" target="_blank">
                <div class="flex items-center gap-2 font-medium hover:text-foreground">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="currentColor">
                        <path d="m24 12-5.72 5.746-5.724-5.741 5.724-5.75L24 12zM5.72 6.254 0 12l5.72 5.746h11.44L5.72 6.254z" />
                    </svg>
                    <p class="text-sm">Alpine.js</p>
                </div>
            </a>
        </div>
        {{-- Hero Title --}}
        <x-ui.h1 class="mt-5 max-w-[24ch] text-center leading-[1.2] font-medium text-balance lg:text-6xl">
            Build faster with reusable blade components
        </x-ui.h1>
        <x-ui.p class="max-w-[60ch] text-center text-pretty">
            Open-source, production-ready components built to accelerate Laravel development while giving you full control to customize, extend, and
            scale.
        </x-ui.p>
        <div class="mt-8 grid w-full gap-x-3 gap-y-4 md:w-auto md:grid-cols-2">
            <a href="{{ route("docs.installation") }}">
                <x-ui.button class="w-full cursor-pointer">
                    Get Started
                    <i data-lucide="arrow-right"></i>
                </x-ui.button>
            </a>
            <a href="{{ route("component") }}">
                <x-ui.button variant="outline" class="w-full cursor-pointer">View Components</x-ui.button>
            </a>
        </div>

        {{-- Credit --}}
        <div class="mt-8">
            <x-ui.small class="text-muted-foreground">
                Inspired by
                <x-ui.a href="https://ui.shadcn.com/" target="_blank" class="text-xs text-inherit">Shadcn</x-ui.a>
            </x-ui.small>
        </div>

        {{-- Previews --}}
        <div
            class="mt-24 w-full"
            @if (! empty($theme))
                x-data="{ theme: @js($theme) }"
            @else
                x-data="{ theme: 'neutral' }"
            @endif
        >
            <x-ui.tabs defaultValue="{{ $_GET['tab'] ?? 'dashboard' }}" class="w-full">
                {{-- Tabs container --}}
                <div class="flex h-14 items-center gap-3">
                    <x-ui.a
                        href="{{ route('home') }}"
                        x-bind:href="() => {
                                const url = new URL($el.getAttribute('href'));
                                url.searchParams.set('theme',theme);
                                return url.toString();
                            }"
                        class="text-muted-foreground no-underline"
                    >
                        Examples
                    </x-ui.a>
                    <x-ui.tabs.container variant="simple" class="gap-2 *:cursor-pointer *:text-base">
                        <x-ui.tabs.trigger value="dashboard">Dashboard</x-ui.tabs.trigger>
                        <x-ui.tabs.trigger value="authentication">Authentication</x-ui.tabs.trigger>
                    </x-ui.tabs.container>
                    <div class="ms-auto flex items-center gap-2">
                        <x-ui.label for="theme">Theme</x-ui.label>
                        <x-ui.select defaultValue="{{ $theme }}" size="sm" id="theme" @change="theme = $el.value">
                            <x-ui.select.option value="neutral">Neutral</x-ui.select.option>
                            <x-ui.select.option value="blue">Blue</x-ui.select.option>
                            <x-ui.select.option value="yellow">Yellow</x-ui.select.option>
                        </x-ui.select>
                        <x-ui.button size="icon-sm" variant="outline"><i data-lucide="copy"></i></x-ui.button>
                    </div>
                </div>

                {{-- tabs content --}}
                <div :class="['theme-' + theme, $store.darkMode.on ? 'dark' : '' ]">
                    <div class="overflow-hidden rounded-lg border">
                        <x-ui.tabs.content value="authentication">
                            @include("examples/blocks/authentication-page")
                        </x-ui.tabs.content>
                        <x-ui.tabs.content value="dashboard">
                            @include("examples/blocks/dashboard")
                        </x-ui.tabs.content>
                    </div>
                </div>
            </x-ui.tabs>
        </div>
    </div>
    <x-footer />
</x-app-layout>
