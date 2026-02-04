<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Separator extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = 'shrink-0 w-full';

    protected string $vrBaseClasses = 'shrink-0 border-r h-full';

    /**
     * Create a new component instance.
     */
    public function __construct(public string $orientation = 'horizontal')
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
                $this->orientation === 'vertical' ? $this->vrBaseClasses : $this->baseClasses,
            );

            return view('components.ui.separator', compact('attributes'));
        };
    }
}
