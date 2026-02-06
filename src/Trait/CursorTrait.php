<?php

namespace Sharkvel\BladeUi\Trait;

use Symfony\Component\Console\Cursor;

trait CursorTrait
{

    public $cursor;

    public function initCursor()
    {
        $this->cursor = new Cursor($this->output);
    }
    public function clearLine(int $count = 1)
    {
        for ($i = 1; $i <= $count; $i++) {
            $this->cursor->moveUp();
            $this->cursor->clearLine();
        }
    }
}