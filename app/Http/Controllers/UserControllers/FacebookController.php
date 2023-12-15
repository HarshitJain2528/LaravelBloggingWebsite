<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\UserActivityLog;
use Exception;

class FacebookController extends Controller
{
    public function loginUsingFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('facebook_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended('/');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
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
            dd($e->getMessage());
        }
    }
}
