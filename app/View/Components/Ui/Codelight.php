<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Codelight extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = 'relative grid rounded-md border border-input bg-neutral-900 dark:bg-input/30';

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $language = 'blade',
        public ?string $example = null
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (! empty($this->example)) {
            $path = resource_path('views/'.str_replace('.', '/', $this->example).'.blade.php');
            $this->example = file_exists($path) ? trim(file_get_contents($path)) : null;
        }

        return function (array $data) {
            $attributes = $data['attributes']->twMerge(
                $this->baseClasses,
            );

            return view('components.ui.codelight', compact('attributes'));
        };
    }
}
