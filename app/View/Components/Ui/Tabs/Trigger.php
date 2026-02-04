<?php

namespace App\View\Components\Ui\Tabs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Trigger extends Component
{
    /**
     * Skeleton classes
     */
    protected string $skeletonClasses = 'inline-flex disabled:opacity-50 relative items-center justify-center gap-2 whitespace-nowrap leading-none text-sm font-medium text-muted-foreground [&_svg:not([class*=size-])]:size-4';

    /**
     * Body classes
     */
    protected array $bodyClasses = [
        'default' => 'rounded-md border-transparent border data-[state=active]:bg-background data-[state=active]:shadow-sm data-[state=active]:text-foreground dark:data-[state=active]:bg-input/30 dark:data-[state=active]:border-input',
        'line' => 'after:w-full after:border-b-2 after:absolute after:-bottom-1 data-[state=active]:after:border-foreground after:border-transparent data-[state=active]:text-foreground',

    ];

    /**
     * Size classes
     */
    protected array $sizeClasses = [
        'sm' => 'h-6 gap-1.5 px-2',
        'default' => 'h-7 px-2 py-1',
        'lg' => 'h-8 px-2.5',
        'icon-sm' => 'size-6',
        'icon' => 'size-7',
        'icon-lg' => 'size-8',
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $value,
        public string $variant = 'default',
        public string $size = 'default'
    ) {}

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

            return view('components.ui.tabs.trigger', compact('attributes'));
        };
    }
}
