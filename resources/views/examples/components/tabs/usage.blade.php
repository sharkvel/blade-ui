<x-ui.tabs defaultValue="account" class="w-96">
    {{-- Tabs --}}
    <x-ui.tabs.container class="max-w-max">
        <x-ui.tabs.trigger value="account">Account</x-ui.tabs.trigger>
        <x-ui.tabs.trigger value="password">Password</x-ui.tabs.trigger>
    </x-ui.tabs.container>
    {{-- Content --}}
    <x-ui.tabs.content value="account">Make changes to your account here.</x-ui.tabs.content>
    <x-ui.tabs.content value="password">Change your password here.</x-ui.tabs.content>
</x-ui.tabs>
