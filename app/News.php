<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'titel_ar',  'description_ar', 'titel_en',  'description_en', 'titel_fr',  'description_fr',
    ];
}
 