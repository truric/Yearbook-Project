<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function coordinator(){
        return $this->belongsTo(Professor::class, 'coordinator_id', 'id');
    }

    public function groups(){
        return $this->hasMany(Group::class);
    }

}
