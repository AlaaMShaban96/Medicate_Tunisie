<?php

namespace App;

use App\AppointmentAvailable;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = [
        'name',
    ];
    public function appointmentAvailable()
    {
        return $this->hasMany(AppointmentAvailable::class);
    }
}
