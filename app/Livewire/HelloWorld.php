<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Jelly';

    public function mount()
    {
        $this->name = 'foo';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
