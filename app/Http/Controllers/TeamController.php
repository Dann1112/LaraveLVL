<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(){

        //Validates the form
        $this->validate(request(),[
            'name' => array(
                'required','string','min:3','max:25','unique:teams',
                'regex:/^[a-z\d_ -]{3,25}$/i'),
            'abbreviation' => 'required|string|max:3',
            'manager' => 'required|string',
            'logo' => 'file|image'

        ]);

        //Creates and Saves the team

        Storage::putFileAs(
            '/public/team_logos',
            request()->file('logo'),
            request('name').'.'.request()->file('logo')->getClientOriginalExtension());   

        $team = Team::create([
            'name' => request('name'),
            'abbreviation' => request('abbreviation'),
            'manager' => request('manager'),
            'comanager' => request('comanager'),
            'streaming_channel' => request('streaming_channel'),
            'primary_color' => request('primary_color'),
            'logo' => 'team_logos/'.request('name').'.'.request()->file('logo')->getClientOriginalExtension(),
            'facebook' => request('facebook'),
            'instagram' => request('instagram'),
            'twitter' => request('twitter'),
            'twitch' => request('twitch'),
            'youtube' => request('youtube')]);

            \App\Player::where('username', request('manager'))->update(['role' => 1]);
            \App\Inscription::create([
                'player' => request('manager'),
                'team' => $team->id]);
            \App\Player::where('username', request('comanager'))->update(['role' => 1]);
            \App\Inscription::create([
                'player' => request('comanager'),
                'team' => $team->id]);


        //Redirects

        return redirect()->home();
        
    }


    /**
     * Display the specified resource.
     *
     * @param  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $next_fixture = \App\Fixture::whereRaw('? IN (home_team, away_team) AND status = 0',$team->name)->oldest('date')->first();
        $last_fixture = \App\Fixture::whereRaw('? IN (home_team, away_team) AND status = 2',$team->name)->latest('date')->first();
        $next_home_team = null;
        $next_away_team = null;
        $last_home_team = null;
        $last_away_team = null;

        if($next_fixture){
            $next_home_team = \App\Team::where('name',$next_fixture->home_team)->first();
            $next_away_team = \App\Team::where('name',$next_fixture->away_team)->first();
        }

        if($last_fixture){
            $last_home_team = \App\Team::where('name',$last_fixture->home_team)->first();
            $last_away_team = \App\Team::where('name',$last_fixture->away_team)->first();
        }

        $last_5_teams = array();

        $last_5_matches = \App\Fixture::whereRaw('? IN (home_team, away_team) AND status = 2', $team->name)->orderBy('date','desc')->take(5)->get();
        foreach($last_5_matches as $match){
            if($match->home_team == $team->name)
                array_push($last_5_teams,$match->away_team);
            else   
                array_push($last_5_teams,$match->home_team);
        }

        $last_5_teams = \App\Team::whereIn('name',$last_5_teams)->take(5)->get();

        return view('team_profile',compact('team','next_fixture','last_fixture','next_home_team',
        'next_away_team','last_home_team','last_away_team', 'last_5_teams', 'last_5_matches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
