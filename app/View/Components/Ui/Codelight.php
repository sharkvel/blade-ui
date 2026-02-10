<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Torchlight\Block;
use Torchlight\Torchlight;

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

        return function (array $data) {
            $block = Block::make()->language($this->language)->code($this->example ?? $data['slot']->toHtml());
            $highlight = Torchlight::highlight($block)[0];

            return view('components.ui.codelight', compact('highlight'));
        };
    }
}
