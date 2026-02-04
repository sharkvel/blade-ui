<?php

namespace App\View\Components\Ui\Select;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OptionGroup extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = 'bg-background text-foreground text-xs font-medium';

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label = '',
        public bool $disabled = false
    ) {
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

            return view('components.ui.select.option-group', compact('attributes'));
        };
    }
}
