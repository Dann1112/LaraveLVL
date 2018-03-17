<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerStat extends Model
{
    public $primaryKey = 'player';
    public $timestamps = false;
    public $keyType = string;
    public $incrementing = false;

}
