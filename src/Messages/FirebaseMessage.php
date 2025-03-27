<?php

namespace CodeCoveVienna\Larafirebase\Messages;

use CodeCoveVienna\Larafirebase\Services\Larafirebase;

class FirebaseMessage extends Larafirebase
{
    public function asNotification()
    {
        return parent::sendNotification();
    }
}
