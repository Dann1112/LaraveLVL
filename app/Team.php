<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes ;

class Team extends Model
{

    use SoftDeletes; 

    public $primaryKey = 'name';
    public $keyType = string;
    public $incrementing = false;
    protected $dates = ['deleted_at'];

    
}
