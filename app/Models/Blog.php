<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['id'];

    /**
     * category
     */
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    /**
     * user
     */
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
    
}
