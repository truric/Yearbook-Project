<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function degrees(){
        return $this->hasMany(Degree::class);
    }

    public function coordinator(){
        return $this->belongsTo(Professor::class, 'coordinator_id', 'id');
    }
}
