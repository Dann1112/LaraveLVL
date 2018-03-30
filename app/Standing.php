<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'competition', 'team'
    ];
}
