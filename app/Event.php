<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function groups(){
        return $this->belongsToMany(Group::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function comments(){
        return $this->hasMany(CommentUserEvent::class, 'id');
    }
}
