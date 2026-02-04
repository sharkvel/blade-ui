<?php

namespace App\View\Components\Ui\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Td extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = 'py-2 px-4 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 *:[[role=checkbox]]:translate-y-0.5';

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return function (array $data) {
            $attributes = $data['attributes']->twMerge(
                $this->baseClasses,
            );

            return view('components.ui.table.td', compact('attributes'));
        };
    }
}
