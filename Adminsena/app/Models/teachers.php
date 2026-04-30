<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    use HasFactory;
    public function Area (){
        return $this->hasMany('App\models\Area');
    }

    public function training_centers (){
        return $this->hasMany('App\models\training_centers');
    }
    public function courses(){
        return $this->belongsToMany('App\Models\courses');
    }
}
