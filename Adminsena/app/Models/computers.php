<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computers extends Model
{
    use HasFactory;
    public function apprentice(){
        return $this->hasOne('App\Models\course_apprentice');
    }
}
