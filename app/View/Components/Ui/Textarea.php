<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Skeleton classes
     */
    protected string $skeletonClasses = 'w-full resize-y placeholder:text-muted-foreground rounded-md flex bg-transparent field-sizing-content rounded-md border border-transparent text-base transition-colors outline-none focus-within:border-ring focus-visible:ring-2 focus-visible:ring-ring/40 disabled:pointer-events-none disabled:opacity-50 md:text-sm';

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
        'sm' => 'min-h-24 px-3 py-2',
        'default' => 'min-h-36 px-3 py-2',
        'lg' => 'min-h-48 px-3 py-2',
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant = 'default',
        public string $size = 'default',
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

            return view('components.ui.textarea', compact('attributes'));
        };
    }
}
