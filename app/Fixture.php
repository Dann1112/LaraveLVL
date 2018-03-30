<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'competition','matchday','date','time','home_team',
        'away_team','home_goals','away_goals','status'
    ];
}
