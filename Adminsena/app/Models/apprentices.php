<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    use HasFactory;
    
     public function Computer()
    {
        return $this->belongsToMany('App\Models\Computer');
    }

    public function course()
    {
        return $this->belongsToMany('App\Models\Course');
    }
}
