<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class OTPVerificationController extends Controller
{
    public function show(User $user)
    {
        return view('User.otp-verify', compact('user'));
    }
    
    public function verify(Request $request, User $user)
    {
        $this->validate($request, [
            'otp' => 'required|size:6',
        ]);
        
        if ($user->otp === $request->otp && $user->otp_expires_at > now()) {
            $user->email_verified_at = now();
            $user->otp = null; // Clear the OTP after successful verification
            $user->otp_expires_at = null; // Clear the OTP expiration time
            $user->save();

            return redirect('/')->with('success', 'You have Successfully Signed Up');
        } 
        elseif ($user->email_verified_at) {
            return redirect('user/login-form')->with('error', 'Your email is already verified. Please proceed to login.');
        } 
        else {
            return back()->with('error', 'Invalid or expired OTP. Please try again.');
        }
    }

    public function resendOtp(Request $request, User $user)
    {
        if (!$user->email_verified_at) {
            // Generate a new OTP and set the expiration time (e.g., 2 minutes from now)
            $otp = rand(100000, 999999);
            $otpExpiresAt = now()->addMinutes(1);

            // Update the user's OTP and OTP expiration time
            $user->otp = $otp;
            $user->otp_expires_at = $otpExpiresAt;
            $user->save();

            // Send the new OTP to the user's email
            // Implement your email sending logic here (similar to the registration process)
            Mail::to($user->email)->send(new OTPMail($otp));
            return redirect()->back()->with('success', 'A new OTP has been sent to your email.');
        } else {
            return redirect('user/login-form')->with('error', 'Your email is already verified. Please proceed to login.');
        }
    }
}
