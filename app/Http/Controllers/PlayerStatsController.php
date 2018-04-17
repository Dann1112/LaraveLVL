<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerStatsController extends Controller
{
    public function index(){
        return view('panel.player_stats');
    }
}
