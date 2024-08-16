<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public function foo(): void
    {

    }
    public function render()
    {
        return <<<'HTML'
            <div>
                <livewire:child-component />
            </div>
        HTML;
    }
}
