<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded=['id'];
    public function blogs(){
        return $this->belongsToMany(Blog::class);
    }
    public function setNameAttribute($value){
        $this->attributes['category_name']=ucwords($value);
    }
}
