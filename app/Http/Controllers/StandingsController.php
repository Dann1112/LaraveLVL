<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Standing;

class StandingsController extends Controller
{
    public function index(){

        //Looks for the id of active competitions so we can look for the standings of those matches
        $active = \App\Competition::where('status','0')->pluck('id');

        //Looks for the standings of the teams in those competitions
        $standings = \App\Standing::whereIn('competition',$active)->orderBy('position')->get();

        //Looks for the name of the teams in those competitions
        $teamsInStandings = \App\Team::all()->pluck('id');

        //Gets the info of the active competitions
        $competitions = \App\Competition::whereIn('id',$active)->get();

        //Looks for the full info of the teams involved
        $teams = \App\Team::whereIn('id',$teamsInStandings)->get();

        return view ('standings',compact('standings','competitions','teams'));
    }

    public function create(){
        $competitions = \App\Competition::all();
        $teams = \App\Team::all();
        return view('panel.inscriptions',compact('competitions','teams'));
    }

    public function store(){

        $this->validate(request(),[
            'competition' => 'required',
            'team' => 'required|string'
        ]);

        Standing::create([
            'competition' => request('competition'),
            'team' => request('team')
        ]);

        return redirect()->home();


    }
}
