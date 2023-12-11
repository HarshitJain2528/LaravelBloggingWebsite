<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    public function index()
    {
        return view('User.home');
    }

    public function loginForm()
    {
        return view('User.login');
    }

    public function signupForm()
    {
        return view('User.signup');
    }

    public function blogsPage()
    {
        return view('User.blogs');
    }

    public function aboutPage()
    {
        return view('User.about');
    }

    public function contactPage()
    {
        return view('User.contact');
    }

    public function addPostPage()
    {
        return view('User.addposts');
    }

    public function settingsPage()
    {
        return view('User.settings');
    }
}
