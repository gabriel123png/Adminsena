<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function courses (){
        return $this->belongsTo('App\models\courses');
    }
    public function teachers (){
        return $this->belongsTo('App\models\teachers');
    }
}
