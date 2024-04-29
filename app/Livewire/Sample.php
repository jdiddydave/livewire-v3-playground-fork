<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Sample extends Component
{
    public $test = 'some data';

    public $user;

    protected $rules = [
        'user.name' => '',
    ];

    public function mount()
    {
        $this->user = User::first();
    }

    public function other()
    {

    }

    public function save()
    {
        // $this->validate(['test' => 'integer']);
        // $this->user->save();
    }

    public function render()
    {
        return view('livewire.sample');
    }
}
