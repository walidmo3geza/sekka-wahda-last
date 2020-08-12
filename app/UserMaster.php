<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMaster extends Model
{
    protected $primaryKey = 'UserID';

    protected $fillable = [
        'UserName', 'UserPassword', 'UserRoles', 'UserEmailID', 'city', 'SSN', 'DriverLicense', 'FullName', 'imagePath', 'PhoneNumber', 'ImageUrl','DriverTotalRate'
    ];

    protected $table = 'UserMaster';

    public function trips_as_traveler()
    {
        return $this->belongsToMany(Trip::class,Reservation::class,'TravellerId','TripId');
    }

    public function trips_as_driver()
    {
        return $this->hasMany(Trip::class,'DriverId');
    }
}
