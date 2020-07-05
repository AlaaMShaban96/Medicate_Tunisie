<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = [
        'name' ,'phoneNo' ,'contactName' ,'email' ,'address' ,'area' ,'city' ,'state' ,'regCode','zipCode',
     ];

}
