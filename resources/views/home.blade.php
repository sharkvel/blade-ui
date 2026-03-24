@php
    $exampleLinks = [
        [
            "url" => route("home"),
            "title" => "Examples",
        ],
        [
            "url" => route("examples", ["tab" => "dashboard"]),
            "title" => "Dashboard",
        ],
        [
            "url" => route("examples", ["tab" => "authentication"]),
            "title" => "Authentication",
        ],
    ];
    $theme = $_GET["theme"] ?? "neutral";
    $announcement = [
        "title" => "Beta will release soon",
        "url" => "#",
    ];
@endphp

<x-app-layout>
    @push("css")
        <link href='{{ asset("css/themes/blue.css") }}' rel="stylesheet" />
        <link href='{{ asset("css/themes/yellow.css") }}' rel="stylesheet" />
        <link href='{{ asset("css/themes/neutral.css") }}' rel="stylesheet" />
        <link href='{{ asset("css/themes/green.css") }}' rel="stylesheet" />
    @endpush

    <x-nav-bar />
    <div
        class="section-wrapper mx-auto flex min-h-[calc(100svh-4rem)] w-full flex-col items-center border-x-0 py-12 md:border-x"
    >
        <!-- Announcement -->
        @if(filled($announcement["title"]))
            <div class="-mb-5">
                <a href='{{ $announcement["url"] }}'>
                    <x-ui.badge variant="secondary">
                        {{ $announcement["title"] }}
                        <i data-lucide="arrow-right"></i>
                    </x-ui.badge>
                </a>
            </div>
        @endif

        {{-- Powered by --}}
        <div class="mx-auto mt-16 flex gap-x-8 text-center text-muted-foreground">
            <a href="https://tailwindcss.com/" target="_blank">
                <div class="flex items-center gap-2 font-medium hover:text-foreground">
                    <svg
                        class="size-4.5"
                        role="img"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"
                        />
                    </svg>
                    <p class="text-sm">Tailwind CSS</p>
                </div>
            </a>
            <a href="https://alpinejs.dev/" target="_blank">
                <div class="flex items-center gap-2 font-medium hover:text-foreground">
                    <svg
                        class="size-4.5"
                        role="img"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="m24 12-5.72 5.746-5.724-5.741 5.724-5.75L24 12zM5.72 6.254 0 12l5.72 5.746h11.44L5.72 6.254z"
                        />
                    </svg>
                    <p class="text-sm">Alpine.js</p>
                </div>
            </a>
        </div>
        {{-- Hero Title --}}
        <x-ui.h1 class="mt-5 text-center leading-[1.2] font-medium text-balance lg:text-6xl lg:tracking-tighter">
            Build faster with reusable blade components
        </x-ui.h1>

        <x-ui.p class="max-w-[60ch] text-center text-pretty lg:text-lg">
            Open-source, production-ready components built to accelerate Laravel development while giving you full
            control to customize, extend, and scale.
        </x-ui.p>
        <div class="mt-8 grid w-full gap-x-3 gap-y-4 md:w-auto md:grid-cols-2">
            <a href='{{ route("docs.installation") }}'>
                <x-ui.button class="w-full cursor-pointer">
                    Get Started
                    <i data-lucide="arrow-right"></i>
                </x-ui.button>
            </a>
            <a href='{{ route("components") }}'>
                <x-ui.button class="w-full cursor-pointer" variant="outline">View Components</x-ui.button>
            </a>
        </div>
        {{-- Credit --}}
        <div class="mt-8">
            <x-ui.small class="text-muted-foreground">
                Inspired by
                <x-ui.a class="text-xs text-inherit" href="https://ui.shadcn.com/" target="_blank">Shadcn</x-ui.a>
            </x-ui.small>
        </div>
        {{-- Previews --}}
        <div
            class="mt-18 flex w-full flex-col gap-2"
            @if(! empty($theme))
            x-data="{ theme: @js($theme) }"
            @else
            x-data="{ theme: 'neutral' }"
            @endif
        >
            <div class="flex h-14 items-center justify-between gap-4">
                <div class="hide-scrollbar flex items-center gap-6 overflow-x-auto *:no-underline">
                    @foreach($exampleLinks as $item)
                        <x-ui.a
                            href="{{ $item['url'] }}"
                            @class([
                                "text-muted-foreground" => request()->url() !== $item["url"],
                            ])
                            x-bind:href="() => {
                                    const url = new URL($el.getAttribute('href'));
                                    url.searchParams.set('theme', theme);
                                    return url.toString();
                                }"
                        >
                            {{ $item["title"] }}
                        </x-ui.a>
                    @endforeach
                </div>

                <div class="flex shrink-0 items-center gap-2">
                    <x-ui.select id="theme" @change="theme = $el.value" defaultValue="{{ $theme }}" size="sm">
                        <x-ui.select.option-group label="Themes">
                            <x-ui.select.option value="blue">Blue</x-ui.select.option>

                            <x-ui.select.option value="green">Green</x-ui.select.option>

                            <x-ui.select.option value="neutral">Neutral</x-ui.select.option>

                            <x-ui.select.option value="yellow">Yellow</x-ui.select.option>
                        </x-ui.select.option-group>
                    </x-ui.select>

                    <x-ui.dialog
                        x-init="$watch('open', value => open && $ajax('{{ route('lazy.codelight') }}',{
                        method:'get',
                        body:{
                            id:'theme-codelight',
                            lang:'css',
                            path:`../stubs/themes/${theme}.css`,
                            title:'resources/css/app.css',
                            v:0
                        },
                        target:'theme-codelight'
                        }))"
                        x-on:ajax:after="lucide.createIcons()"
                    >
                        <x-ui.dialog.trigger>
                            <x-ui.button size="icon-sm" variant="outline">
                                <i data-lucide="copy"></i>
                            </x-ui.button>
                        </x-ui.dialog.trigger>

                        <x-ui.dialog.content
                            class="flex max-h-[calc(70vh)] w-full flex-col sm:max-w-2xl"
                            variant="modern"
                        >
                            <x-ui.dialog.header>
                                <x-ui.dialog.title class="capitalize" x-text="theme"></x-ui.dialog.title>

                                <x-ui.dialog.description>
                                    Copy and paste the following code into your CSS file.
                                </x-ui.dialog.description>
                            </x-ui.dialog.header>
                            <div
                                class="relative grid h-screen min-h-0 w-full grid-cols-1 grid-rows-1 *:inset-0 *:[grid-area:1/1] *:aria-busy:hidden"
                            >
                                <div id="theme-codelight"></div>

                                <div class="hidden place-content-center [[aria-busy]+&]:grid">
                                    <i class="animate-spin" data-lucide="loader2"></i>
                                </div>
                            </div>
                        </x-ui.dialog.content>
                    </x-ui.dialog>
                </div>
            </div>

            <div :class="['theme-' + theme, $store.darkMode.on ? 'dark' : '']">
                @include("examples.blocks.showcase")
            </div>
        </div>
    </div>
    <x-footer />
</x-app-layout>
