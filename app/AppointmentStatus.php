<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentStatus extends Model
{
    protected $fillable = [
        'name',
    ];
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
