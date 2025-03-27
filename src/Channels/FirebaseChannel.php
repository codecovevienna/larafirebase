<?php

namespace CodeCoveVienna\Larafirebase\Channels;

use Illuminate\Notifications\Notification;

class FirebaseChannel
{
    /**
     * Send the given notification.
     */
    public function send($notifiable, Notification $notification)
    {
        /** @var \CodeCoveVienna\Larafirebase\FirebaseMessage $message */
        $message = $notification->toFirebase($notifiable);
    }
}
