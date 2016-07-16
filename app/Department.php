<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function works(){
        return $this->hasMany('App\Work');
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }

}
