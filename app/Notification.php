<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'ReceiverID', 'RaiserID', 'Message_', 'TypeOfNotification'
    ];

    protected $table = 'notification_';

    public $timestamps = false;
}
