<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        /** @var User $user */
        $user = auth()->user();
        $notifications = tap($user->unreadNotifications)->markAsRead();

        return view('notifications.index', [
           'notifications' => $notifications
        ]);
    }
}
