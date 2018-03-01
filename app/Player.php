<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    
    protected $table = 'players';
    public $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';

    

    public function scopeAgenteLibre($query){ // Para poder hacer esto : App\Jugador::AgenteLibre()->where(algo aqui);

        Player::where('player','FA')->get();
    }

}
