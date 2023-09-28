<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home --- Your trusted platform to find the expertise you need, all in one place.')]
class Home extends Component
{

    public function render()
    {
        return view('livewire.home');
    }
}
