<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diag extends Model
{
    protected $fillable = [
        'name' ,'phoneNo' ,'contactName' ,'email' ,'address' ,'area' ,'city' ,'state' ,'regCode','zipCode',
     ];
}
