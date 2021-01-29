<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class ReadPost extends Component
{
    public $post;

    public function mount($slug){
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.read-post')
            ->extends('layouts.app');
    }
}
