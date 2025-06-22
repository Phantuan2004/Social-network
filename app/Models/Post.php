<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postComments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function postImages()
    {
        return $this->hasMany(PostImage::class, 'post_id');
    }

    public function postReactions()
    {
        return $this->hasMany(Reaction::class, 'post_id');
    }
}
