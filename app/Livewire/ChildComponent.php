<?php

namespace App\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{
    public function render()
    {
        return <<<'HTML'
            <div>
                Hey!
            </div>
        HTML;
    }
}
