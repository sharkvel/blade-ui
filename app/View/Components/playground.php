<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class playground extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = 'min-h-96 flex flex-col';

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $path
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

            return view('components.playground', compact('attributes'));
        };
    }
}
