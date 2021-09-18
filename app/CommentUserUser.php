<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentUserUser extends Model
{
    public function emitter(){
        return $this->belongsTo(User::class, 'emitter_id', 'id');
    }

    public function recipient(){
        return $this->belongsTo(User::class, 'recipient_id', 'id');
    }
}
