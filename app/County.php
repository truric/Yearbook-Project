<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public function district(){
        return $this->belongsTo(District::class);
    }

    public function parishes(){
        return $this->hasMany(Parish::class);
    }
}
