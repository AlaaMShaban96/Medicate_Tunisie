<?php

namespace App;

use App\AppointmentAvailable;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = [
        'name',
    ];
    public function appointmentAvailable()
    {
        return $this->belongsToMany(AppointmentAvailable::class,'appointment_available_day');
    }
}
