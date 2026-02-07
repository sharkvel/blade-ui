<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarMenuSubButton extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = "flex h-7 w-full items-center gap-2 rounded-md px-2 hover:bg-muted data-[active='true']:font-medium data-[active='true']:bg-muted [&_svg]:size-4";

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
            $attributes = $data['attributes']->twMerge(
                $this->baseClasses,
            );

            return view('components.ui.sidebar-menu-sub-button', compact('attributes'));
        };
    }
}
