<?php

namespace App\View\Components\Ui\Tabs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tabs extends Component
{
    /**
     * Skeleton classes
     */
    protected string $baseClasses = 'flex flex-col gap-2';

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $defaultValue = ''
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

            return view('components.ui.tabs._tabs', compact('attributes'));
        };
    }
}
