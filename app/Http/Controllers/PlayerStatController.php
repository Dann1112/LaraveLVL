<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerStat;

class PlayerStatController extends Controller
{
    public function index(){

        $stat = 'goals';

        $players = PlayerStat::take(100)->paginate(20);
        $inscriptions = \App\Inscription::all();
        $teams = \App\Team::all();

        return view('ranking',compact(['players','stat']));
    }

    public function show($stat){

        if($stat === 'games_played'){
            $players = PlayerStat::take(100)->paginate(20);
        }
        else
        $players = PlayerStat::where($stat,'>',0)->orderBy($stat,'desc')->take(100)->paginate(20);

        return view('ranking',compact(['players','stat']));
    
    }

}
