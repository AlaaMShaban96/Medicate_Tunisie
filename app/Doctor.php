<?php

namespace App;

use App\AppointmentAvailable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',  'phoneNo', 'email',  'address', 'area',  'city',
    ];
    public function appointmentAvailable()
    {
        return $this->hasMany(AppointmentAvailable::class);
    }
}
