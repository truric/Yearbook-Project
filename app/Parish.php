<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function county(){
        return $this->belongsTo(County::class);
    }
}
