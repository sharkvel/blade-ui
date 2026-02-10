<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Codelight extends Component
{
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
        if (!empty($this->example)) {
            $path = resource_path(
                'views/' .
                (
                    $this->language === 'blade'
                    ? str_replace('.', '/', $this->example) . '.blade.php'
                    : $this->example
                )
            );
            $this->example = file_exists($path) ? trim(file_get_contents($path)) : null;
        }

        return view('components.ui.codelight');
    }
}
