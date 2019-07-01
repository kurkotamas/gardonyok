<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = '/images/';
    protected $fillable = [
      'title', 'path', 'description'
    ];
    //

    public function getPathAttribute($photo) {
        return $this->uploads . $photo;
    }
}
