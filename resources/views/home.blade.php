@php
    $exampleLinks = [
        [
            "url" => route("home"),
            "title" => "Examples",
        ],
        [
            "url" => route("example", ["tab" => "dashboard"]),
            "title" => "Dashboard",
        ],
        [
            "url" => route("example", ["tab" => "authentication"]),
            "title" => "Authentication",
        ],
    ];
    $theme = $_GET["theme"] ?? "neutral";
@endphp

<x-app-layout>
    @push("css")
        <link rel="stylesheet" href="{{ asset("css/themes/blue.css") }}" />
        <link rel="stylesheet" href="{{ asset("css/themes/yellow.css") }}" />
        <link rel="stylesheet" href="{{ asset("css/themes/neutral.css") }}" />
        <link rel="stylesheet" href="{{ asset("css/themes/green.css") }}" />
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
            class="mt-24 flex w-full flex-col gap-2"
            @if (! empty($theme))
                x-data="{ theme: @js($theme) }"
            @else
                x-data="{ theme: 'neutral' }"
            @endif
        >
            <div class="flex h-14 items-center justify-between gap-4">
                <div class="hide-scrollbar flex items-center gap-6 overflow-x-auto *:no-underline">
                    @foreach ($exampleLinks as $item)
                        <x-ui.a
                            href="{{ $item['url'] }}"
                            x-bind:href="() => {
                                const url = new URL($el.getAttribute('href'));
                                url.searchParams.set('theme',theme);
                                return url.toString();
                            }"
                            @class([
                                "text-muted-foreground" => request()->url() !== $item["url"],
                            ])
                        >
                            {{ $item["title"] }}
                        </x-ui.a>
                    @endforeach
                </div>

                <div class="flex shrink-0 items-center gap-2">
                    <x-ui.select defaultValue="{{ $theme }}" size="sm" id="theme" @change="theme = $el.value">
                        <x-ui.select.option-group label="Themes">
                            <x-ui.select.option value="blue">Blue</x-ui.select.option>
                            <x-ui.select.option value="green">Green</x-ui.select.option>
                            <x-ui.select.option value="neutral">Neutral</x-ui.select.option>
                            <x-ui.select.option value="yellow">Yellow</x-ui.select.option>
                        </x-ui.select.option-group>
                    </x-ui.select>
                    <x-ui.button size="icon-sm" variant="outline"><i data-lucide="copy"></i></x-ui.button>
                </div>
            </div>
            <div :class="['theme-' + theme, $store.darkMode.on ? 'dark' : '' ]">
                <div class="grid items-start gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    {{-- Col-1 --}}
                    <div class="rounded-lg border p-8">
                        <x-ui.field.group>
                            {{-- Field set --}}
                            <x-ui.field.set>
                                <x-ui.field.legend class="mb-2">Payment Method</x-ui.field.legend>
                                <x-ui.field.description>All transactions are secure and encrypted</x-ui.field.description>
                                {{-- Field group --}}
                                <x-ui.field.group>
                                    <x-ui.field>
                                        <x-ui.field.label for="name-on-card">Name on card</x-ui.field.label>
                                        <x-ui.input id="name-on-card" placeholder="John Doe" />
                                    </x-ui.field>
                                    <div class="grid grid-cols-3 gap-4">
                                        <x-ui.field class="col-span-2">
                                            <x-ui.field.label for="card-number">Card Number</x-ui.field.label>
                                            <x-ui.input id="card-number" placeholder="1234 5678 9012 3456" />
                                            <x-ui.field.description>Enter your 16-digit number.</x-ui.field.description>
                                        </x-ui.field>
                                        <x-ui.field>
                                            <x-ui.field.label for="card-cvv">CVV</x-ui.field.label>
                                            <x-ui.input id="card-cvv" placeholder="123" />
                                        </x-ui.field>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <x-ui.field>
                                            <x-ui.field.label for="card-month">Month</x-ui.field.label>
                                            <x-ui.select placeholder="MM">
                                                @for ($month = 1; $month<=12;$month++)
                                                    <x-ui.select.option value="{{ $month }}">
                                                        {{ str_pad($month, 2, "0", STR_PAD_LEFT) }}
                                                    </x-ui.select.option>
                                                @endfor
                                            </x-ui.select>
                                        </x-ui.field>
                                        <x-ui.field>
                                            <x-ui.field.label for="card-year">Year</x-ui.field.label>
                                            <x-ui.select placeholder="YYYY">
                                                @for ($year = 2024; $year<=2029;$year++)
                                                    <x-ui.select.option value="{{ $year }}">{{ $year }}</x-ui.select.option>
                                                @endfor
                                            </x-ui.select>
                                        </x-ui.field>
                                    </div>
                                </x-ui.field.group>
                            </x-ui.field.set>
                            <x-ui.field.separator />
                            {{-- Billing --}}
                            <x-ui.field.set>
                                <x-ui.field.legend>Billing Address</x-ui.field.legend>
                                <x-ui.field.description>The billing address associated with your payment method</x-ui.field.description>
                                <x-ui.field.group>
                                    <x-ui.field orientation="horizontal">
                                        <x-ui.checkbox name="same-as-shipping-address" id="sasa" checked />
                                        <x-ui.field.label for="sasa">Same as shipping address</x-ui.field.label>
                                    </x-ui.field>
                                </x-ui.field.group>
                            </x-ui.field.set>
                            <x-ui.field.separator />
                            {{-- Comment --}}
                            <x-ui.field.set>
                                <x-ui.field.group>
                                    <x-ui.field>
                                        <x-ui.field.label for="comments">Comments</x-ui.field.label>
                                        <x-ui.textarea id="comments" placeholder="Add any additional comments" size="sm" />
                                    </x-ui.field>
                                </x-ui.field.group>
                            </x-ui.field.set>
                            {{-- Action --}}
                            <x-ui.field orientation="horizontal">
                                <x-ui.button type="submit">Submit</x-ui.button>
                                <x-ui.button type="reset" variant="outline">Cancel</x-ui.button>
                            </x-ui.field>
                        </x-ui.field.group>
                    </div>
                    {{-- Col-2 --}}
                    <div class="flex flex-col gap-8">
                        {{-- Empty --}}
                        <x-ui.empty class="border">
                            <x-ui.empty.header>
                                <x-ui.empty.media>
                                    <x-ui.avatar.group class="grayscale">
                                        <x-ui.avatar>
                                            <x-ui.avatar.image src="https://untitledui.com/images/avatars/olivia-rhye" />
                                            <x-ui.avatar.fallback>OR</x-ui.avatar.fallback>
                                        </x-ui.avatar>
                                        <x-ui.avatar>
                                            <x-ui.avatar.image src="https://untitledui.com/images/avatars/phoenix-baker" />
                                            <x-ui.avatar.fallback>PB</x-ui.avatar.fallback>
                                        </x-ui.avatar>
                                        <x-ui.avatar>
                                            <x-ui.avatar.image src="https://untitledui.com/images/avatars/ava-wright" />
                                            <x-ui.avatar.fallback>AW</x-ui.avatar.fallback>
                                        </x-ui.avatar>
                                    </x-ui.avatar.group>
                                </x-ui.empty.media>
                                <x-ui.empty.title>No Team Members</x-ui.empty.title>
                                <x-ui.empty.description>Invite your team to collaborate on this project.</x-ui.empty.description>
                            </x-ui.empty.header>
                            <x-ui.empty.content>
                                <x-ui.button size="sm">
                                    <i data-lucide="plus" data-icon="inline-start"></i>
                                    Invite Members
                                </x-ui.button>
                            </x-ui.empty.content>
                        </x-ui.empty>
                        {{-- Badges --}}
                        <div class="flex gap-2">
                            <x-ui.badge>
                                <i data-lucide="loader-circle" data-icon="inline-start" class="animate-spin"></i>
                                Syncing
                            </x-ui.badge>
                            <x-ui.badge variant="secondary">
                                <i data-lucide="loader-circle" data-icon="inline-start" class="animate-spin"></i>
                                Uploading
                            </x-ui.badge>
                            <x-ui.badge variant="outline">
                                <i data-lucide="loader-circle" data-icon="inline-start" class="animate-spin"></i>
                                Loading
                            </x-ui.badge>
                        </div>
                        {{-- Input group --}}
                        <div class="flex items-center gap-2">
                            <x-ui.button variant="outline" class="rounded-full" size="icon">
                                <i data-lucide="plus"></i>
                            </x-ui.button>
                            <x-ui.input class="rounded-full" placeholder="Write your message" />
                        </div>
                        <div>
                            <x-ui.field>
                                <x-ui.field.label>Price start</x-ui.field.label>
                                <x-ui.field.description>Set your minimum budget</x-ui.field.description>
                                <x-ui.slider />
                            </x-ui.field>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-app-layout>
