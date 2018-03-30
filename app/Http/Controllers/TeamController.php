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

        Team::create([
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
        $team_info = Team::findOrFail($team);
        $logo = Storage::url('team_logo/'.$team.'.png');
        
        return view('team_profile',compact(array('team_info','logo')));
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
