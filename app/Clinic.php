<?php

namespace App;

use App\AppointmentAvailable;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = [
        'name' ,'phoneNo' ,'contactName' ,'email' ,'license','address' ,'area' ,'city' ,'state' ,'regCode','zipCode',
     ];
    public function appointmentAvailable()
    {
        return $this->hasMany(AppointmentAvailable::class);
    }
}
