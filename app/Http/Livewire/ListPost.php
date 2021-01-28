<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListPost extends Component
{
    // public $posts;

    public function render()
    {
        $posts = \App\Post::latest()->paginate(20);
        return view('livewire.list-post', ['posts' => $posts])
            ->extends('layouts.app')
            ->section('content');
    }
}
