<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class EditPost extends Component
{
    public $post;

    public $success = false;

    protected $rules = [
        'post.title' => 'required|string|min:6|max:200',
        'post.body' => 'required|string',
    ];

    public function mount($id){
        $this->post = Post::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.edit-post')
            ->extends('layouts.app');
    }

    public function update($id){
        $this->validate();

        Post::where('id', $id)->update([
            'title' => $this->post->title,
            'body' => $this->post->body
        ]);

        $this->success = true;
    }
}
