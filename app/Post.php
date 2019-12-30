<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $date = ['published_at'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
