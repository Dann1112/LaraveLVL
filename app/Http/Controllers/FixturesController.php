<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Competition;
use \App\Team;
use \App\Fixture;

class FixturesController extends Controller
{
    public function create(){

        $competition = Competition::where('status','0')->get();
        $teams = Team::all();

        return view ('panel.fixtures',compact('competition','teams'));
    }

    public function store(){

        $this->validate(request(),[
            'competition' => 'required',
            'matchday' => 'required|min:0',
            'status' => 'required',
            'home_team' => 'required',
            'home_goals' => 'required|min:0',
            'away_goals' => 'required|min:0',
            'away_team' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        Fixture::create([
            'competition' => request('competition'),
            'matchday' => request('matchday'),
            'status' => request('status'),
            'home_team' => request('home_team'),
            'home_goals' => request('home_goals'),
            'away_goals' => request('away_goals'),
            'away_team' => request('away_team'),
            'date' => request('date'),
            'time' => request('time'),
        ]);

        return redirect()->home();

    }
}
