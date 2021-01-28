<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostAlert extends Component
{
    public $liked = false;

    public function render()
    {
        return view('livewire.post-alert')
            ->extends('layouts.app')
            ->section('content');
    }

    public function toggleLike(){
        $this->liked = !$this->liked;
    }
}
