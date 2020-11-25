<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function update(Reply $reply)
    {
        $conversation = $reply->conversation;

        $this->authorize('update', $conversation);

        $conversation->best_reply_id = $reply->id;
        $conversation->save();

        return back();
    }
}
