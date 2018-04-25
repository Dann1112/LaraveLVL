<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionsController extends Controller
{
    public function create(){

        \App\Inscription::create([
            'player' => request('username'),
            'team' => request('team')]);

        return redirect()->home();
        
    }
}
