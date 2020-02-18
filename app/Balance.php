<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public function User()
    {
        return $this->belongTo(User::class);
    }
    
}
