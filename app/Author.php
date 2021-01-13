<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function articels()
    {
        return $this->hasMany('App\Article');
    }
}
