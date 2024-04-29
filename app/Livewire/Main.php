<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Main extends Component
{
    #[Computed]
    public function name()
    {
        return ucfirst($this->getName());
    }

    public function render()
    {
        return view('livewire.main');
    }
}
