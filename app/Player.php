<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    
    protected $table = 'players';
    public $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';


}
