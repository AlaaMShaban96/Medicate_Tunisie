<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_ar','name_en', 'name_fr','img_path','item_id'
    ];
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
   

}
