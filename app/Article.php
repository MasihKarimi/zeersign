<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
