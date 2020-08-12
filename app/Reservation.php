<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'Reservation';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID', 'TravellerId', 'TripId', 'Accebted'
    ];

    public $timestamps = false;
}
