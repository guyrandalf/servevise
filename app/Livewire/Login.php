<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login --- Your trusted platform to find the expertise you need, all in one place.')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.login');
    }
}
