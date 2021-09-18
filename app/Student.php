<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function parish(){
        return $this->belongsTo(Parish::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
