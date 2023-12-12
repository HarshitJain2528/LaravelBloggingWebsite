<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class UserViewController extends Controller
{
    public function index()
    {
        $posts = Post::inRandomOrder()->limit(6)->get();
        $categories = Category::inRandomOrder()->limit(9)->get();
        return view('User.home', compact('categories', 'posts'));
    }

    public function loginForm()
    {
        return view('User.login');
    }

    public function signupForm()
    {
        return view('User.signup');
    }

    public function blogsPage(Request $request)
    {
        $selectedCategory = $request->input('category');

        if ($selectedCategory) {
            $posts = Post::where('category_id', $selectedCategory)->get();
        } 
        else {
            $posts = Post::paginate(10);
        }

        $categories = Category::all(); // Fetch all categories for the dropdown

        return view('User.blogs', compact('posts', 'categories', 'selectedCategory'));
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
        $categories = Category::all();
        return view('User.addposts', compact('categories'));
    }

    public function settingsPage()
    {
        $user = auth()->user();
        return view('User.settings', compact('user'));
    }

    public function showBlog($id)
    {
        $blogs = Post::where('id', $id)->get();
        return view('User.showblog', compact('blogs'));
    }
}
