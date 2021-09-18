<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentUserEvent extends Model
{
    public function emitter(){
        return $this->belongsTo(User::class, 'emitter_id', 'id');
    }

    public function recipient(){
        return $this->belongsTo(Event::class, 'recipient_id', 'id');
    }
}
