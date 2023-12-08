<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Login;

class AuthController extends Controller
{
    public function adminLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard')->with(['success' => 'Login Successful']);
        } else {
            return redirect()->back()->with(['error' => 'Invalid credentials']);
        }
    }

    public function adminLogout() {
        Session::flush();
        Auth::guard('admin')->logout();
  
        return redirect('/');
    }
}
