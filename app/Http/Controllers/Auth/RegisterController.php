<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

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

        Validator::extend('olderThan', function($attribute, $value, $parameters)
        {
            $minAge = ( ! empty($parameters)) ? (int) $parameters[0] : 13;
            return (new DateTime)->diff(new DateTime($value))->y >= $minAge;
        });


        $positions = ['GK','LB','CB','RB','LM','RM','CAM','CDM',
                        'LW','RW','ST'];
        
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
            //'terms_of_service' => 'accepted'*/
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
        
        Storage::putFileAs('public/profile_pictures',$data['profile_picture'],$data['username'].'.'.$data['profile_picture']->getClientOriginalExtension());   

        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'birth_date' => date_create($data['dd'].'-'.$data['mm'].'-'.$data['yyyy']),
            'gender' => $data['gender'],
            'position' => $data['position'],
            'nationality' => $data['nationality'],
            'language' => $data['language'],
            'profile_picture' => $data['username'].'.'.$data['profile_picture']->getClientOriginalExtension(),
            'strong_foot' => $data['strong_foot'],
        ]);
    }
}
