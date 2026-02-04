<?php

namespace App\View\Components\Ui\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tfoot extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = 'bg-muted/50 border-t font-medium [&>tr]:last:border-b-0';

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

            return view('components.ui.table.tfoot', compact('attributes'));
        };
    }
}
