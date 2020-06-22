<?php

namespace App;

use App\Appointment;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name','phone','file_id'
    ];
   public function appointment()
   {
       return $this->hasMany(Appointment::class);
   }
}
