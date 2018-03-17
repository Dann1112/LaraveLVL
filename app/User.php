<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'players';
    public $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','name','last_name','dd','mm','yyyy','birth_date',
        'gender','nationality','language','position','strong_foot','height','weight','created_at',
        'updated_at','profile_picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
}
