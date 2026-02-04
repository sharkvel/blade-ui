<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class P extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = 'text-base leading-relaxed not-first:mt-6';

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
            $class = $data['attributes']['class'] ?? '';

            // For mt-*
            if (preg_match('/(^|\s)(mt-[^\s]+)/', $class)) {
                $this->baseClasses = str_replace('not-first:mt-6', '', $this->baseClasses);
            }

            $attributes = $data['attributes']->twMerge(
                $this->baseClasses
            );

            return view('components.ui.p', compact('attributes'));
        };
    }
}
