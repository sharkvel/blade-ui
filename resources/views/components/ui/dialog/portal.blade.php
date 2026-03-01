<template x-teleport="body">
    <div data-slot="dialog-portal" x-show="open">
        {{ $slot }}
    </div>
</template>
