<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

use App\User;

class RegistrationController extends Controller
{
    public function create(){

        return view('registrations.create');

    }

    public function store(){

        $positions = ['GK','LB','CB','RB','LM','RM','CAM','CDM',
                        'LW','RW','ST'];

        //Validates the form
        $this->validate(request(),[
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
            'strong_foot' => Rule::in(['L','R']),
            'position' => array( 'required','string', Rule::in($positions)),
            'nationality' => 'required|max:3',
            'profile_picture' => 'file|image',
            //'terms_of_service' => 'accepted'*/
        ]);

        //Creates and Saves the user

        //$path = request()->file('profile_picture')->storeAs(
            //'public/profile_pictures', request('username').'.'.request()->file('profile_picture')->getClientOriginalExtension()
        //);

        Storage::putFileAs(
            '/public/profile_pictures',
            request()->file('profile_picture'),
            request('username').'.'.request()->file('profile_picture')->getClientOriginalExtension());   

        $user = User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
            'last_name' => request('last_name'),
            'position' => request('position'),
            'gender' => request('gender'),
            'nationality' => request('nationality'),
            'profile_picture' => 'profile_pictures/'.request('username').'.'.request()->file('profile_picture')->getClientOriginalExtension(),
            'strong_foot' => request('strong_foot')]);

            //$user = User::create(request(['username','email','password','name','last_name','gender','position','nationality','profile_picture','strong_foot']));

        //Sign them in
        auth()->login($user);

        //Redirects

        return redirect()->home();
        
    }
}
