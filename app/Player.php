<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';

    public function freeAgents($query){
        return $query->where('team','FA')->get();
    }

    public static function team($team){
        return static::where('team',$team)->get();
    }

    public static function from($country){
        return static::where('nationality',$country)->get();
    }

  

}
