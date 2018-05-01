<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Inscription;

class InscriptionsController extends Controller
{
    public function create(){

        $this->validate(request(),[
            'username' => 'unique:inscriptions,player',
        ]);

        Inscription::create([
            'player' => request('username'),
            'team' => request('team')]);

        \App\Message::where('id',request('message'))->update(['status'=>1]);

        return redirect()->home();
        
    }
}
