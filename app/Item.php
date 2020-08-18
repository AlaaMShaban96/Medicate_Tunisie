<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'description_ar','description_en', 'description_fr','category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
