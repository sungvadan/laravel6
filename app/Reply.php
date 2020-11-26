<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read Conversation $conversation
 */
class Reply extends Model
{
    public function isBestReply()
    {
        return $this->conversation->best_reply_id === $this->id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
