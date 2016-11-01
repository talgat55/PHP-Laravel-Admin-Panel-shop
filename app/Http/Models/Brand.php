<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'remarks'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
