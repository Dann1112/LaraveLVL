<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $players = Player::orderBy('overall', 'DESC')->take(100)->paginate(15);

        return view('players',compact('players'));
    }

    public function search()
    {

        $username = request()->filled('username') ? request('username') : '';

        $position = request()->has('position') ? request('position') : '';

        $strong_foot = request()->has('strong_foot') ? request('strong_foot') : '';

        $language = request()->has('language') ? request('language') : '';

        $nationality = request()->has('nationality') ? request('nationality') : '';

        $minPace = request()->filled('minPace') ? request('minPace') : 0;
        $maxPace = request()->filled('maxPace') ? request('maxPace') : 99;

        $minShooting = request()->filled('minShooting') ? request('minShooting') : 0;
        $maxShooting = request()->filled('maxShooting') ? request('maxShooting') : 99;

        $minPassing = request()->filled('minPassing') ? request('minPassing') : 0;
        $maxPassing = request()->filled('maxPassing') ? request('maxPassing') : 99;

        $minDefense = request()->filled('minDefense') ? request('minDefense') : 0;
        $maxDefense = request()->filled('maxDefense') ? request('maxDefense') : 99;

        $minPhysical = request()->filled('minPhysical') ? request('minPhysical') : 0;
        $maxPhysical = request()->filled('maxPhysical') ? request('maxPhysical') : 99;

        $minDribbling = request()->filled('minDribbling') ? request('minDribbling') : 0;
        $maxDribbling = request()->filled('maxDribbling') ? request('maxDribbling') : 99;

        $minOverall = request()->filled('minOverall') ? request('minOverall') : 0;
        $maxOverall = request()->filled('maxOverall') ? request('maxOverall') : 99;

        $minHeight = request()->filled('minHeight') ? request('minHeight') : 150;
        $maxHeight = request()->filled('maxHeight') ? request('maxHeight') : 250;


        $order = request('orderby');

        $players = Player::where([
            ['username', 'like', '%'.$username.'%'],
            ['position', 'like', '%'.$position.'%'],
            ['strong_foot', 'like', '%'.$strong_foot.'%'],
            ['language', 'like', '%'.$language.'%'],
            ['nationality', 'like', '%'.$nationality.'%'],
            ['pace', '>=', $minPace],
            ['pace', '<=', $maxPace],
            ['shooting', '>=', $minShooting],
            ['shooting', '<=', $maxShooting],
            ['dribbling', '>=', $minDribbling],
            ['dribbling', '<=', $maxDribbling],
            ['defense', '>=', $minDefense],
            ['defense', '<=', $maxDefense],
            ['passing', '>=', $minPassing],
            ['passing', '<=', $maxPassing],
            ['physical', '>=', $minPhysical],
            ['physical', '<=', $maxPhysical],
            ['overall', '>=', $minOverall],
            ['overall', '<=', $maxOverall],
            ['height', '>=', $minHeight],
            ['height', '<=', $maxHeight]
        ])->orderBy($order,$order == 'username' ? 'asc' : 'desc')->paginate(15);

            
        return view('players',compact('players'));
    }

    public function editProfile(){

        $player = auth()->user();

        return view('players.edit_profile',compact('player'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('players.profile',compact(array('player')));
    }

    public function logout(){
        Auth::logout();

        return redirect()->home();
    }

    
}
