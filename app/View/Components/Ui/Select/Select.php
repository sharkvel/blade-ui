<?php

namespace App\View\Components\Ui\Select;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Skeleton classes
     */
    protected string $skeletonClasses = 'inline-flex min-w-0 w-full shrink-0 cursor-pointer appearance-none items-center justify-center gap-1.5 rounded-md border border-transparent text-sm leading-none whitespace-nowrap transition-colors outline-none *:text-sm focus-within:border-ring focus-visible:ring-2 focus-visible:ring-ring/40 disabled:pointer-events-none disabled:opacity-50';

    /**
     * Body classes
     */
    protected array $bodyClasses = [
        'default' => 'border-input shadow-xs dark:bg-input/30 dark:hover:bg-input/50',
    ];

    /**
     * Size classes
     */
    protected array $sizeClasses = [
        'sm' => 'h-8 px-3 pr-8.5',
        'default' => 'h-9 px-3 pr-8.5',
        'lg' => 'h-10 px-3 pr-8.5',
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant = 'default',
        public string $size = 'default',
        public string $placeholder = ''
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
                $this->skeletonClasses,
                $this->bodyClasses[$this->variant],
                $this->sizeClasses[$this->size]
            );

            return view('components.ui.select._select', compact('attributes'));
        };
    }
}
