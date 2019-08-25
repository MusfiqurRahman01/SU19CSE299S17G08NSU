<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subs extends Model
{
    protected $fillable = [
        'first_name','last_name', 'email', 'password',
    ];
}
