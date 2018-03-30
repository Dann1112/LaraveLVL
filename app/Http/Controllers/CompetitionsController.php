<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;

class CompetitionsController extends Controller
{

    public function create(){
        return view('panel.competitions');
    }

    public function store(){

        $this->validate(request(),[
            'name' => array(
                'required','string','min:3','max:25','unique:competitions',
                'regex:/^[a-z\d_ -]{3,25}$/i'),
            'start_date' => 'required'
        ]);

        Competition::create([
            'name' => request('name'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'prize' => request('prize'),
            'champion' => request('champion')
        ]);

        return redirect()->home();

        

    }
}
