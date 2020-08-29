<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    /**
     * POSTS
     */
    public function posts()
    {
        return $this->belongsTo(Blog::class, 'id', 'category_id');
    }
    
}
