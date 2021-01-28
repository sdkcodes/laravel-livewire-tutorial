<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class ComposePost extends Component
{
    public $title, $body;

    protected $rules = [
        'title' => 'required|string|max:200',
        'body' => 'required'
    ];

    public function render()
    {
        return view('livewire.compose-post')
            ->extends('layouts.app')
            ->section('section');
    }

    public function savePost(){
        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'slug' => Str::slug($this->title)
        ]);
    }
}
