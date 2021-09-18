<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
