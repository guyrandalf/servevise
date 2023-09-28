<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Our Blog --- Your trusted platform to find the expertise you need, all in one place.')]
class Blog extends Component
{
    public function render()
    {
        return view('livewire.blog');
    }
}
