<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
       'name_ar','name_en','name_fr','img_path'
   ];
}
