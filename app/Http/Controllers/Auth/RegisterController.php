<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::INDEX;

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

//        $this->validate(
//            $data,
//            [
//                'name'             => 'required|max:255|string',
//                'email'          => 'required|max:255|email|string|unique:users',
//                'password' => 'required|string|min:8|confirmed'
//            ],
//            [
//                'name.required'    => 'Please Provide Your Email Address For Better Communication, Thank You.',
//                'email.unique'      => 'Sorry, This Email Address Is Already Used By Another User. Please Try With Different One, Thank You.',
//                'password.required' => 'Password Is Required For Your Information Safety, Thank You.',
//                'password.min'      => 'Password Length Should Be More Than 8 Character Or Digit Or Mix, Thank You.',
//            ]
//        );
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'uni' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'photo'=>'img/user.jfif',
            'university'=>$data['uni'],
            'city'=>$data['city'],
        ]);
    }
}
