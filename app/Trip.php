<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'FromCity', 'ToCity', 'PlaceToMeet', 'DateOfTrip', 'TimeOfTrip', 'DriverId', 'TimeOfPost'
    ];

    protected $table = 'trip';

    public function driver()
    {
        return $this->belongsTo(UserMaster::class,'DriverId');
    }

    public function travelers()
    {
        return $this->belongsToMany(UserMaster::class,Reservation::class,'TripId','TravellerId');
    }
}
