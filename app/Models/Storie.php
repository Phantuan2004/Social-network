<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    protected $table = 'stories';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
