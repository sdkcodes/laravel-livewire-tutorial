<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class HomePosts extends Component
{
    public function render()
    {
        $posts = Post::latest()->paginate(20);
        return view('livewire.home-posts', ['posts' => $posts]);
    }
}
