<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = ['from','to'];

}
