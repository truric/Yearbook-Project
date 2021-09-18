<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function coordinator(){
        return $this->belongsTo(Professor::class, 'coordinator_id', 'id');
    }

    public function degree(){
        return $this->belongsTo(Degree::class);
    }

    public function professors(){
        return $this->belongsToMany(Professor::class);
    }

    public function events(){
        return $this->belongsToMany(Event::class);
    }

}
