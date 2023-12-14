<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use App\Models\UserActivityLog;


class ViewController extends Controller
{
    public function index()
    {
        return view('AdminFiles.login');
    }

    public function dashboard()
    {
        $totalPosts = Post::count();
        $totalComments = Comment::count();
        $totalUsers = User::count();
        $userActivities = UserActivityLog::with('user')->orderBy('created_at', 'desc')->take(2)->get();
        return view('AdminFiles.dashboard', compact('totalPosts', 'totalComments', 'totalUsers', 'userActivities'));
    }

    public function posts()
    {
        $posts = Post::with('user', 'category')->paginate(10);
        return view('AdminFiles.posts', compact('posts'));
    }

    public function comments()
    {
        $comments = Comment::with('post', 'category')->paginate(5);
        return view('AdminFiles.comments', compact('comments'));
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('AdminFiles.users', compact('users'));
    }

    public function category()
    {
        return view('AdminFiles.addcategory');
    }

    public function show($id)
    {
        $posts = Post::where('id', $id)->get();
        return view('AdminFiles.show', compact('posts'));
    }
}
