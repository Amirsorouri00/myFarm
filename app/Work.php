<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    public function departments(){
        return $this->belongsTo(Department::class);
    }
    //
}
