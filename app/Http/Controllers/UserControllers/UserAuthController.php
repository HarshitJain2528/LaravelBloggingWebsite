<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        // Check if a user with the same email already exists
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // User with the same email already exists, redirect to login page
            return redirect('user/login-form')->with('error', 'An account with this email already exists. Please proceed to login.');
        }

        // Generate a random numeric OTP with 6 digits
        $otp = rand(100000, 999999);

        // Set the expiration time (e.g., 15 minutes from now)
        $otpExpiresAt = now()->addMinutes(1);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'otp' => $otp, // Store the numeric OTP
            'otp_expires_at' => $otpExpiresAt, // Store the expiration time
        ]);

        // Send the numeric OTP to the user's email
        Mail::to($user->email)->send(new OTPMail($otp));

        return redirect()->route('otp.verify', ['user' => $user]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success','You have Successfully loggedin');

        }
        return redirect("login")->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/')->with(['success' => 'Logout Successfully']);
    }
}
