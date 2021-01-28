<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $mode = "list";
    
    public function render()
    {
        $posts = \App\Post::all();
        return view('livewire.post', [
            'posts' => $posts
        ]);
    }
}
