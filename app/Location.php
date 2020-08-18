<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
         'description_ar',  'description_en', 'description_fr','tel','fax','country_id','google_map'
    ];
  
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
