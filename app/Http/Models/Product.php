<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description','price','brand_id'];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category','product_categories','product_id','category_id');
    }
}
