<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create an Account --- Your trusted platform to find the expertise you need, all in one place.')]
class Register extends Component
{
    public function render()
    {
        return view('livewire.register');
    }
}
