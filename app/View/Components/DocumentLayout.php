<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DocumentLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $sidebarItems,
        public array $previousPage = [],
        public array $nextPage = []
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.document-layout');
    }
}
