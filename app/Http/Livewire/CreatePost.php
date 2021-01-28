<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class CreatePost extends Component
{
    public $title, $body;

    public $success;

    protected $rules = [
        'title' => 'required|string|max:220',
        'body' => 'required'
    ];

    public function mount(){
        $this->success = false;
    }
    public function render()
    {
        return view('livewire.create-post')
            ->extends('layouts.app')
            ->section('content');
    }

    public function create(){
        $this->validate();

        Post::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'body' => $this->body,
            'author_id' => auth()->id()
        ]);
        
        $this->success = true;
    }
}
