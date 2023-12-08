<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('AdminFiles.login');
    }

    public function dashboard()
    {
        return view('AdminFiles.dashboard');
    }

    public function posts()
    {
        return view('AdminFiles.posts');
    }

    public function comments()
    {
        return view('AdminFiles.comments');
    }

    public function users()
    {
        return view('AdminFiles.users');
    }
}
