<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;

class MessageController extends Controller
{
    public function index(){

        $messages = Message::where('to',auth()->user()->username)->where('status',0)->orderBy('created_at','DESC')->get();
        $managers = Message::where('to',auth()->user()->username)->distinct()->pluck('from');

        

        $teams = \App\Team::whereIn('manager',$managers)->get();
        
        return view('players.inbox',compact(['messages','teams']));
    }

    public function createClubRequest(){

        //Creates and Saves the club request

        $this->validate(request(),[
            'username' => 'unique:inscriptions,player',
        ]);

        Message::create([
            'from' => auth()->user()->username,
            'to' => request()->username]);

        //Redirects

        return redirect()->home();
        
    }
}
