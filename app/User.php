<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function professor(){
        return $this->hasOne(Professor::class);
    }

    public function student(){
        return $this->hasOne(Student::class);
    }

    public function photos(){
        return $this->belongsToMany(Photo::class);
    }

    public function commentsUserEvent(){
        return $this->hasMany(CommentUserEvent::class,'emitter_id');
    }

    public function commentsUserUserEmitter(){
        return $this->hasMany(CommentUserEvent::class,'emitter_id');
    }

    public function commentsUserUserRecipient(){
        return $this->hasMany(CommentUserEvent::class,'emitter_id');
    }
}
