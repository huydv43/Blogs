<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function orderBy($string, $string1)
    {
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
