<?php

namespace App\Policies;

use App\Conversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any conversations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }


    public function update(User $user, Conversation $conversation)
    {

        return $conversation->user->is($user);
    }

    public function view(User $user, Conversation $conversation)
    {

        return $conversation->user->is($user);
    }
}
