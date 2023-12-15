<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use App\Models\User;
use App\Models\UserActivityLog;

class GoogleAuthController extends Controller
{

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
            // dd($user);
            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended('/');

            }
            else{

                $newUser = User::create([

                    'name' => $user->name,

                    'email' => $user->email,

                    'google_id'=> $user->id,

                    'password' => Hash::make('123')

                ]);

                Auth::login($newUser);

                UserActivityLog::create([
                    'user_id' => Auth::user()->id,
                    'action' => 'Logged In',
                    'description' => 'User logged in: ' . Auth::user()->name,
                ]);
                return redirect()->intended('/');

            }

        } catch (Exception $e) {

            // return redirect('auth/google');
            dd($e->getMessage()); 
        }

    }
}
