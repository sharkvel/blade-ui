<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Skeleton classes
     */
    protected string $skeletonClasses = 'inline-flex w-full gap-1.5 min-w-0 rounded-md border border-transparent text-base placeholder:text-muted-foreground transition-colors outline-none file:inline-flex file:align-middle file:leading-none file:font-medium file:text-foreground file:text-sm focus-within:border-ring focus-visible:ring-2 focus-visible:ring-ring/40 disabled:pointer-events-none disabled:opacity-50 md:text-sm file:[&+text]:align-middle';

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
        'sm' => 'h-8 px-3 file:py-1.5',
        'default' => 'h-9 px-3 file:py-2',
        'lg' => 'h-10 px-3 file:py-2.5',
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant = 'default',
        public string $size = 'default',
        public string $type = 'text'
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

            return view('components.ui.input', compact('attributes'));
        };
    }
}
