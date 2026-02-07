<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabsContainer extends Component
{
    /**
     * Skeleton classes
     */
    protected string $skeletonClasses = 'flex items-center';

    /**
     * Body classes
     */
    protected array $bodyClasses = [
        'default' => 'bg-muted rounded-lg',
        'line' => '',
    ];

    /**
     * Size classes
     */
    protected array $sizeClasses = [
        'sm' => 'h-8 p-1',
        'default' => 'h-9 p-1',
        'lg' => 'h-10 p-1',
        'icon-sm' => 'h-8 p-1',
        'icon' => 'h-9 p-1',
        'icon-lg' => 'h-10 p-1',
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
                $this->sizeClasses[$this->size],
            );

            return view('components.ui.tabs-container', compact('attributes'));
        };
    }
}
