<?php

namespace gardony;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'location', 'phone',
    ];
}
