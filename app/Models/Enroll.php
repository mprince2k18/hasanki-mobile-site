<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    
    protected $guarded = ['id'];

    public function occupation()
    {
      return $this->hasOne('App\Models\Occupation','id','occupation_id');
    }

    public function schedule()
    {
      return $this->hasOne('App\Models\Schedule','id','schedule_id');
    }

    public function payment()
    {
      return $this->hasOne('App\Models\Payment','id','payment_id');
    }
    
    //END
}
