<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Exception;
use App\Models\User;
class GoogleAuthController extends Controller
{
    // use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()

    {

        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            // if($finduser){

            //     Auth::login($finduser);

            //     return return redirect('/');

            // }
            // else{

                $newUser = User::create([

                    'name' => $user->name,

                    'email' => $user->email,

                    'google_id'=> $user->id

                ]);

                Auth::login($newUser);

                return redirect('/');

            // }

        } catch (Exception $e) {

            return redirect('auth/google');

        }

    }
}
