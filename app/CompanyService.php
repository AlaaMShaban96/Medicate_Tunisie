<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{
    protected $fillable = [
        'titel_ar','titel_en','titel_fr','descrption_ar','descrption_en','descrption_fr','details_ar','details_en','details_fr',
    ];
    
}
 