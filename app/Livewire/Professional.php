<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Find a Professional --- Your trusted platform to find the expertise you need, all in one place.')]
class Professional extends Component
{
    public function render()
    {
        return view('livewire.professional');
    }
}
