<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friends';

    // KHởi tạo mối quan hệ 
    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
