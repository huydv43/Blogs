<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $appends = ['date_formatted'];
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getDateFormattedAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at)->format('Y/m/d h:i a');
    }
}
