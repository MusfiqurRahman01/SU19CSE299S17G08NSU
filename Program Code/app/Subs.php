<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subs extends Model
{
    protected $fillable = [
        'user_name','user_id', 'vehicle_reg', 
    ];
}
