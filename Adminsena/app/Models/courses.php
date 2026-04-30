<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    public function Areas(){
        return $this->hasMany('App\Models\Areas');
    }
    public function teachers(){
        return $this->belongsToMany('App\Models\teachers');
    }
}
