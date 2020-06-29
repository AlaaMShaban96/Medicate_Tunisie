<?php

namespace App;

use App\Day;
use App\Clinic;
use App\Doctor;
use App\Service;
use Illuminate\Database\Eloquent\Model;

class AppointmentAvailable extends Model
{
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function days()
    {
        return $this->belongsToMany(Day::class,'appointment_available_day');
        
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
