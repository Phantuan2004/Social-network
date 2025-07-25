<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
