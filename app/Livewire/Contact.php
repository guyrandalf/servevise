<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact Us --- Your trusted platform to find the expertise you need, all in one place.')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
