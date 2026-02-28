<div class="grid items-start gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    {{-- Col-1 --}}
    <div class="rounded-lg border p-8">
        <x-ui.field.group>
            {{-- Field set --}}
            <x-ui.field.set>
                <x-ui.field.legend>Payment Method</x-ui.field.legend>
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
                                        {{ str_pad($month, 2, '0', STR_PAD_LEFT) }}
                                    </x-ui.select.option>
                                @endfor
                            </x-ui.select>
                        </x-ui.field>
                        <x-ui.field>
                            <x-ui.field.label for="card-year">Year</x-ui.field.label>
                            <x-ui.select placeholder="YYYY">
                                @for ($year = 2024; $year<=2029;$year++)
                                    <x-ui.select.option value="{{ $year }}">
                                        {{ $year }}
                                    </x-ui.select.option>
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
    <div class="flex flex-col gap-7">
        {{-- Empty --}}
        <x-ui.empty class="border md:px-6">
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
            <x-ui.input-group class="rounded-full">
                <x-ui.input-group.input placeholder="Write your message" />
                <x-ui.input-group.addon align="inline-end">
                    <x-ui.input-group.button class="rounded-full" variant="ghost" size="icon-xs">
                        <i data-lucide="audio-lines"></i>
                    </x-ui.input-group.button>
                </x-ui.input-group.addon>
            </x-ui.input-group>
        </div>
        <div>
            <x-ui.field x-data="{range:35}">
                <x-ui.field.label>Price start</x-ui.field.label>
                <x-ui.field.description>
                    Set your minimum budget:
                    <span class="inline-flex font-medium">
                        $
                        <span x-text="range" class="tabular-nums"></span>
                    </span>
                </x-ui.field.description>
                <x-ui.slider x-model="range" value="35" />
            </x-ui.field>
        </div>
        <div>
            <x-ui.input-group>
                <x-ui.input-group.input placeholder="Search..." />
                <x-ui.input-group.addon>
                    <i data-lucide="search" data-icon="inline-start"></i>
                </x-ui.input-group.addon>
                <x-ui.input-group.addon align="inline-end">12 results</x-ui.input-group.addon>
            </x-ui.input-group>
        </div>
        <div>
            <x-ui.input-group>
                <x-ui.input-group.input class="pl-1!" placeholder="example.com" />
                <x-ui.input-group.addon>https://</x-ui.input-group.addon>
                <x-ui.input-group.addon align="inline-end">
                    <x-ui.input-group.button size="icon-xs" class="rounded-full">
                        <i data-lucide="circle-alert"></i>
                    </x-ui.input-group.button>
                </x-ui.input-group.addon>
            </x-ui.input-group>
        </div>
        <div>
            <x-ui.input-group>
                <x-ui.input-group.textarea placeholder="Ask, Search or Chat..." class="min-h-16" />
                <x-ui.input-group.addon align="block-end">
                    <x-ui.input-group.button size="icon-xs" variant="outline" class="rounded-full">
                        <i data-lucide="plus"></i>
                    </x-ui.input-group.button>
                    <x-ui.input-group.button>Auto</x-ui.input-group.button>
                    <x-ui.input-group.text class="ms-auto">52% used</x-ui.input-group.text>
                    <x-ui.separator orientation="vertical" class="h-3" />
                    <x-ui.input-group.button size="icon-xs" variant="default" class="rounded-full">
                        <i data-lucide="arrow-up"></i>
                    </x-ui.input-group.button>
                </x-ui.input-group.addon>
            </x-ui.input-group>
        </div>
        <div>
            <x-ui.input-group>
                <x-ui.input-group.input placeholder="@_sharkvel" />
                <x-ui.input-group.addon align="inline-end">
                    <i data-lucide="circle-check" class="text-primary" data-icon="inline-end"></i>
                </x-ui.input-group.addon>
            </x-ui.input-group>
        </div>
    </div>
    {{-- Col-3 --}}
    <div class="flex flex-col gap-7">
        <div>
            <x-ui.input-group class="rounded-full">
                <x-ui.input-group.input class="ps-1!" />
                <x-ui.input-group.addon>
                    <x-ui.input-group.button size="icon-xs" class="rounded-full">
                        <i data-lucide="info"></i>
                    </x-ui.input-group.button>
                </x-ui.input-group.addon>
                <x-ui.input-group.addon class="ps-1!">https://</x-ui.input-group.addon>
                <x-ui.input-group.addon align="inline-end">
                    <x-ui.input-group.button size="icon-xs" class="rounded-full">
                        <i data-lucide="star"></i>
                    </x-ui.input-group.button>
                </x-ui.input-group.addon>
            </x-ui.input-group>
        </div>
        <div>
            <x-ui.item variant="outline">
                <x-ui.item.content>
                    <x-ui.item.title>Two-factor authentication</x-ui.item.title>
                    <x-ui.item.description class="xl:hidden 2xl:block">
                        Verify via email or phone number.
                    </x-ui.item.description>
                </x-ui.item.content>
                <x-ui.item.action>
                    <x-ui.button size="sm">Enable</x-ui.button>
                </x-ui.item.action>
            </x-ui.item>
        </div>
        <div>
            <a href="#">
                <x-ui.item variant="outline">
                    <x-ui.item.media>
                        <i data-lucide="badge-check" class="size-5"></i>
                    </x-ui.item.media>
                    <x-ui.item.content>
                        <x-ui.item.title>Your profile has been verified.</x-ui.item.title>
                    </x-ui.item.content>
                    <x-ui.item.action>
                        <i data-lucide="chevron-right" class="size-4"></i>
                    </x-ui.item.action>
                </x-ui.item>
            </a>
        </div>
        <div>
            <x-ui.field.separator>Appearance Settings</x-ui.field.separator>
        </div>
        <div>
            <x-ui.field.set>
                <x-ui.field.group>
                    <x-ui.field.set>
                        <x-ui.field.legend>Compute Environment</x-ui.field.legend>
                        <x-ui.field.description>
                            Select the compute environment for your cluster.
                        </x-ui.field.description>
                        <x-ui.radio-group defaultValue="kubernetes" name="radio">
                            <x-ui.field.label for="kubernetes">
                                <x-ui.field orientation="horizontal">
                                    <x-ui.field.content>
                                        <x-ui.field.title>Kubernetes</x-ui.field.title>
                                        <x-ui.field.description>
                                            Run GPU workloads on a K8s configured cluster. This is the default.
                                        </x-ui.field.description>
                                    </x-ui.field.content>
                                    <x-ui.radio-group.item value="kubernetes" id="kubernetes" />
                                </x-ui.field>
                            </x-ui.field.label>
                            <x-ui.field.label for="virtual-machine">
                                <x-ui.field orientation="horizontal">
                                    <x-ui.field.content>
                                        <x-ui.field.title>Virtual Machine</x-ui.field.title>
                                        <x-ui.field.description>
                                            Access a VM configured cluster to run workloads. (Coming soon)
                                        </x-ui.field.description>
                                    </x-ui.field.content>
                                    <x-ui.radio-group.item value="virtual-machine" id="virtual-machine" />
                                </x-ui.field>
                            </x-ui.field.label>
                        </x-ui.radio-group>
                    </x-ui.field.set>
                    <x-ui.field.separator />
                    <x-ui.field orientation="horizontal">
                        <x-ui.field.content>
                            <x-ui.field.label>Number of GPUs</x-ui.field.label>
                            <x-ui.field.description>You can add more later.</x-ui.field.description>
                        </x-ui.field.content>
                        <x-ui.button-group
                            x-data="{
                                        min:1,
                                        max:32,
                                        count:8,
                                        update(num){
                                            const newValue = +this.count + +num;
                                            if(newValue >= this.min && newValue <= this.max) this.count = newValue;
                                        }
                                    }"
                        >
                            <x-ui.button
                                variant="outline"
                                size="icon-sm"
                                @click="update(-1)"
                                x-bind:disabled="count<=min"
                            >
                                <i data-lucide="minus"></i>
                            </x-ui.button>
                            <x-ui.input
                                value="8"
                                x-model="count"
                                x-mask="999"
                                x-bind:value="count"
                                min="1"
                                max="32"
                                class="w-14 appearance-none text-center"
                                size="sm"
                            />
                            <x-ui.button
                                variant="outline"
                                size="icon-sm"
                                @click="update(1)"
                                x-bind:disabled="count>=max"
                            >
                                <i data-lucide="plus"></i>
                            </x-ui.button>
                        </x-ui.button-group>
                    </x-ui.field>
                    <x-ui.field.separator />
                    <x-ui.field orientation="horizontal">
                        <x-ui.field.content>
                            <x-ui.field.label for="wallpaper-tining">Wallpaper Tinting</x-ui.field.label>
                            <x-ui.field.description>Allow the wallpaper to be tinted.</x-ui.field.description>
                        </x-ui.field.content>
                        <x-ui.switch id="wallpaper-tining" />
                    </x-ui.field>
                </x-ui.field.group>
            </x-ui.field.set>
        </div>
    </div>
    {{-- Col-4 --}}
    <div class="flex flex-col gap-7">
        <div>
            <x-ui.field>
                <x-ui.input-group class="rounded-lg">
                    <x-ui.input-group.textarea class="min-h-16" placeholder="Ask, search, or make anything..." />
                    <x-ui.input-group.addon align="block-start">
                        <x-ui.input-group.button variant="outline" size="sm">
                            <i data-lucide="at-sign"></i>
                            Add context
                        </x-ui.input-group.button>
                    </x-ui.input-group.addon>
                    <x-ui.input-group.addon align="block-end">
                        <x-ui.input-group.button size="icon-sm" class="rounded-full">
                            <i data-lucide="paperclip"></i>
                        </x-ui.input-group.button>
                        <x-ui.input-group.button class="rounded-full" size="sm">Auto</x-ui.input-group.button>
                        <x-ui.input-group.button class="rounded-full" size="sm">
                            <i data-lucide="globe"></i>
                            All Sources
                        </x-ui.input-group.button>
                        <x-ui.input-group.button variant="default" size="icon-sm" class="ms-auto rounded-full">
                            <i data-lucide="arrow-up"></i>
                        </x-ui.input-group.button>
                    </x-ui.input-group.addon>
                </x-ui.input-group>
            </x-ui.field>
        </div>
        <div>
            <x-ui.scroll-area orientation="horizontal" gutter="null" scrollbar="hidden">
                <x-ui.button-group>
                    <x-ui.button-group>
                        <x-ui.button variant="outline" size="icon">
                            <i data-lucide="arrow-left"></i>
                        </x-ui.button>
                    </x-ui.button-group>
                    <x-ui.button-group>
                        <x-ui.button variant="outline">Archive</x-ui.button>
                        <x-ui.button variant="outline">Report</x-ui.button>
                    </x-ui.button-group>
                    <x-ui.button-group>
                        <x-ui.button variant="outline">Snooze</x-ui.button>
                        <x-ui.button variant="outline" size="icon">
                            <i data-lucide="ellipsis"></i>
                        </x-ui.button>
                    </x-ui.button-group>
                </x-ui.button-group>
            </x-ui.scroll-area>
        </div>
        <div>
            <x-ui.field.label for="i-agreed">
                <x-ui.field orientation="horizontal">
                    <x-ui.checkbox id="i-agreed" />
                    <x-ui.field.label for="i-agreed">I agree to the terms and conditions</x-ui.field.label>
                </x-ui.field>
            </x-ui.field.label>
        </div>
        <div>
            <x-ui.scroll-area orientation="horizontal" scrollbar="hidden" gutter="null" :mask="true">
                <x-ui.button-group>
                    <x-ui.button-group>
                        <x-ui.button variant="outline">1</x-ui.button>
                        <x-ui.button variant="outline">2</x-ui.button>
                        <x-ui.button variant="outline">3</x-ui.button>
                    </x-ui.button-group>
                    <x-ui.button-group>
                        <x-ui.button variant="outline" size="icon">
                            <i data-lucide="arrow-left"></i>
                        </x-ui.button>
                        <x-ui.button variant="outline" size="icon">
                            <i data-lucide="arrow-right"></i>
                        </x-ui.button>
                    </x-ui.button-group>

                    <x-ui.button-group>
                        <x-ui.button variant="outline">
                            <i data-lucide="bot" data-icon="inline-start"></i>
                            Copilot
                        </x-ui.button>
                        <x-ui.button variant="outline" size="icon">
                            <i data-lucide="chevron-down"></i>
                        </x-ui.button>
                    </x-ui.button-group>
                </x-ui.button-group>
            </x-ui.scroll-area>
        </div>
        <div>
            <x-ui.card>
                <x-ui.card.content>
                    <x-ui.field.group>
                        <x-ui.field.set>
                            <x-ui.field.legend>How did you hear about us?</x-ui.field.legend>
                            <x-ui.field.description>
                                Select the option that best describes how you heard about us.
                            </x-ui.field.description>
                            <x-ui.field.group class="flex flex-row flex-wrap gap-2">
                                <x-ui.field.label for="social-media" class="w-fit! rounded-full!">
                                    <x-ui.field
                                        orientation="horizontal"
                                        class="pointer-events-none gap-0 px-2! py-1.5! pe-2.25! transition-[gap] has-checked:gap-2"
                                    >
                                        <x-ui.checkbox
                                            id="social-media"
                                            checked
                                            class="size-0 scale-0 rounded-full bg-primary transition-[width,height,scale] checked:size-4 checked:scale-100 dark:bg-primary!"
                                        />
                                        <x-ui.field.label>Social media</x-ui.field.label>
                                    </x-ui.field>
                                </x-ui.field.label>
                                <x-ui.field.label for="search-engine" class="w-fit! rounded-full!">
                                    <x-ui.field
                                        orientation="horizontal"
                                        class="pointer-events-none gap-0 px-2! py-1.5! pe-2.25! transition-[gap] has-checked:gap-2"
                                    >
                                        <x-ui.checkbox
                                            id="search-engine"
                                            class="size-0 scale-0 rounded-full bg-primary transition-[width,height,scale] checked:size-4 checked:scale-100 dark:bg-primary!"
                                        />
                                        <x-ui.field.label>Search Engine</x-ui.field.label>
                                    </x-ui.field>
                                </x-ui.field.label>
                                <x-ui.field.label for="referral" class="w-fit! rounded-full!">
                                    <x-ui.field
                                        orientation="horizontal"
                                        class="pointer-events-none gap-0 px-2! py-1.5! pe-2.25! transition-[gap] has-checked:gap-2"
                                    >
                                        <x-ui.checkbox
                                            id="referral"
                                            class="size-0 scale-0 rounded-full bg-primary transition-[width,height,scale] checked:size-4 checked:scale-100 dark:bg-primary!"
                                        />
                                        <x-ui.field.label>Referral</x-ui.field.label>
                                    </x-ui.field>
                                </x-ui.field.label>
                                <x-ui.field.label for="other" class="w-fit! rounded-full!">
                                    <x-ui.field
                                        orientation="horizontal"
                                        class="pointer-events-none gap-0 px-2! py-1.5! pe-2.25! transition-[gap] has-checked:gap-2"
                                    >
                                        <x-ui.checkbox
                                            id="other"
                                            class="size-0 scale-0 rounded-full bg-primary transition-[width,height,scale] checked:size-4 checked:scale-100 dark:bg-primary!"
                                        />
                                        <x-ui.field.label>Other</x-ui.field.label>
                                    </x-ui.field>
                                </x-ui.field.label>
                            </x-ui.field.group>
                        </x-ui.field.set>
                    </x-ui.field.group>
                </x-ui.card.content>
            </x-ui.card>
        </div>
        <div>
            <x-ui.empty class="border md:px-6">
                <x-ui.empty.header>
                    <x-ui.empty.media variant="icon">
                        <i data-lucide="loader-circle" class="animate-spin"></i>
                    </x-ui.empty.media>
                    <x-ui.empty.title>Processing your request</x-ui.empty.title>
                    <x-ui.empty.description>
                        Please wait while we process your request. Do not refresh the page.
                    </x-ui.empty.description>
                </x-ui.empty.header>
                <x-ui.empty.content>
                    <x-ui.button variant="outline" size="sm">Cancel</x-ui.button>
                </x-ui.empty.content>
            </x-ui.empty>
        </div>
    </div>
</div>
