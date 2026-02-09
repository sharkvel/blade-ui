<x-ui.table>
    <x-ui.table.caption>A list of your recent invoices.</x-ui.table.caption>
    {{-- Header --}}
    <x-ui.table.header>
        <x-ui.table.row>
            <x-ui.table.head>Invoice</x-ui.table.head>
            <x-ui.table.head>Status</x-ui.table.head>
            <x-ui.table.head>Method</x-ui.table.head>
            <x-ui.table.head class="text-right">Amount</x-ui.table.head>
        </x-ui.table.row>
    </x-ui.table.header>
    {{-- Body --}}
    <x-ui.table.body>
        <x-ui.table.row>
            <x-ui.table.cell>INV001</x-ui.table.cell>
            <x-ui.table.cell>Paid</x-ui.table.cell>
            <x-ui.table.cell>Credit Card</x-ui.table.cell>
            <x-ui.table.cell class="text-right tabular-nums">$250.00</x-ui.table.cell>
        </x-ui.table.row>
    </x-ui.table.body>
    {{-- Footer --}}
    <x-ui.table.footer>
        <x-ui.table.row>
            <x-ui.table.cell colspan="3">Total</x-ui.table.cell>
            <x-ui.table.cell class="text-right tabular-nums">$250.00</x-ui.table.cell>
        </x-ui.table.row>
    </x-ui.table.footer>
</x-ui.table>
