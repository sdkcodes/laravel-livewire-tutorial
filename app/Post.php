<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];

    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id');
    }
}
