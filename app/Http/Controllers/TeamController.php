<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
/*
    protected function validator(array $data)
    {

        
        return Validator::make($data, [
            'username' => array(
                            'required','string','min:3','max:16','unique:players',
                            'regex:/^[a-z\d_-]{3,16}$/i'),
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:5|max:15|confirmed',
            'name' => array('required','string','max:55',
                            'regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.\'-]+$/u'),
            'last_name' => array('required','string','max:55',
                            'regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.\'-]+$/u'),
            'gender' => array( 'required','string', Rule::in(['M', 'F'])),
            'position' => array( 'required','string', Rule::in($positions)),
            'nationality' => 'required|max:3',
            'profile_picture' => 'file|image',
            
        ]);
    }
*/

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
    public function store(Request $request)
    {
        
        $team = new \App\Team;

        request('logo')->storeAs(
            'public/team_logos', request('name')
        );

        $team->name = request('name');
        $team->abbreviation = request('abbreviation');
        $team->manager = request('manager');
        $team->comanager = request('comanager');
        $team->streaming_channel = request('streaming_channel');
        $team->primary_color = request('primary_color');
        $team->secondary_color = request('secondary_color');
        $team->country = request('country');
        $team->logo = request('name').'.';
        $team->twitter = request('twitter');
        $team->facebook = request('facebook');
        $team->twitch = request('twitch');
        $team->youtube = request('youtube');
        $team->instagram = request('instagram');

        $team->save();

        return redirect('/');
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
