<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes ;

class Competition extends Model
{
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'name', 'start_date', 'end_date', 'prize', 'champion'
    ];

}