<x-ui.example-area title="Table">
    <div class="space-y-6">
        <x-ui.table>
            <x-ui.table.caption>This is demo table</x-ui.table.caption>
            <x-ui.table.header>
                <x-ui.table.head>#</x-ui.table.head>
                <x-ui.table.head>Product</x-ui.table.head>
                <x-ui.table.head>Price</x-ui.table.head>
            </x-ui.table.header>
            <x-ui.table.body>
                <x-ui.table.row>
                    <x-ui.table.cell>1</x-ui.table.cell>
                    <x-ui.table.cell>Product - 1</x-ui.table.cell>
                    <x-ui.table.cell>$1.00</x-ui.table.cell>
                </x-ui.table.row>
                <x-ui.table.row>
                    <x-ui.table.cell>2</x-ui.table.cell>
                    <x-ui.table.cell>Product - 2</x-ui.table.cell>
                    <x-ui.table.cell>$5.00</x-ui.table.cell>
                </x-ui.table.row>
            </x-ui.table.body>
            <x-ui.table.footer>
                <x-ui.table.row>
                    <x-ui.table.cell colspan="2">Total</x-ui.table.cell>
                    <x-ui.table.cell>$6.00</x-ui.table.cell>
                </x-ui.table.row>
            </x-ui.table.footer>
        </x-ui.table>
    </div>
</x-ui.example-area>
