<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __contruct(){
        $this->middleware('guest',['except'=>'destroy']);
    }
    public function create(){
        return view('sessions.login');
    }

    public function store(){

        //Attempt to authenticate the user

        if(!auth()->attempt(request(['username','password']))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);

        }

        return redirect()->home();

    }

    public function destroy(){
        auth()->logout();

        return redirect()->home();

    }
}
