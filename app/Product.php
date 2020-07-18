<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function suppliers(){
        return $this->hasMany('App\Supplier');
    }

    public function sectors(){
        return $this->hasMany('App\Sector');
    }
    
    public function categories(){
        return $this->hasMany('App\Category');
    }
}
