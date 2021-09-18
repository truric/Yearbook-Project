<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function areas(){
        return $this->hasMany(Area::class);
    }

    public function degrees(){
        return $this->hasMany(Degree::class);
    }

    public function coordinatedGroups(){
        return $this->hasMany(Group::class, 'coordinator_id');
    }

    public function groups(){
        return $this->belongsToMany(Group::class);
    }


}
