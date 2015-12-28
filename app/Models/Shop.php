<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function users(){
        return $this->belongsToMany('App\Models\Shop');
    }

    public function owner()
    {
        return $this->belongsTo('App\User');
    }
}
