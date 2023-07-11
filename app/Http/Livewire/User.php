<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h1>This is user component </h1>
            </div>
        blade;
    }
}
