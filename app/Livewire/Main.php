<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;

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
