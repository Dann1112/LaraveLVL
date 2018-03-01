<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $positions = ['GK','LB','CB','RB','LM','RM','CAM','CDM',
                        'LW','RW','ST'];
        
        return Validator::make($data, [
            'username' => 'required|string|min:6|max:255|unique:players',
            /*'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'name' => 'required|string|max:35',
            'last_name' => 'required|string|max:35',
            'birth_date' => 'required|date',
            'gender' => [ 'required|string', Rule::in(['M', 'F'])],
            'position' => [ 'required', Rule::in($positions)],
            'nationality' => 'required|max:3',
            'profile_picture' => 'nullable|sometimes|file|image',
            'terms_of_service' => 'accepted'*/
        ]);
    }

    /**
     * Create a new player instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'birth_date' => date_create($data['yyyy'].'-'.$data['mm'].'-'.$data['dd']),
            'gender' => $data['gender'],
            'position' => $data['position'],
            'nationality' => $data['nationality'],
            'language' => $data['language'],
            'profile_picture' => $data['profile_picture'],
            'strong_foot' => $data['strong_foot']
        ]);
    }
}
