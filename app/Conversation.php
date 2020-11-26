<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read User $user
 */
class Conversation extends Model
{
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
