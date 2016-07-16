<?php

namespace App;

use App\Tag;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Class_;

class Lesson extends Model
{
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //
}
