<?php

namespace App;

use App\Catogry;
use App\AppointmentStatus;
use App\AppointmentAvailable;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'appointment_available_id','patient_id','catogry_id',"appointment_status_id","clinic_employee_id",'date'
    ];
    public function appointmentAvailable()
    {
        return $this->belongsTo(AppointmentAvailable::class);
    }

    public function appointmentStatus()
    {
        return $this->belongsTo(AppointmentStatus::class);
    }
    
    public function catogry()
    {
        return $this->belongsTo(Catogry::class);
    }
}
