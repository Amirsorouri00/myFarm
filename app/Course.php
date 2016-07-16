<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function works(){
        return $this->hasMany('App\Work');
    }

    public function users(){
        $this->belongsToMany('App\User');
    }

    public function departments(){
        $this->belongsTo('App\Department');
    }

    //
}
