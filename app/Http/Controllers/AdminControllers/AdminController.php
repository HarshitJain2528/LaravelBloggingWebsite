<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
    public function postDestroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/posts')->with(['success' => 'Post Deleted Successfully.']);
    }
    
    public function commentsDelete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comments')->with(['success' => 'Comment Deleted Successfully.']);
    }
    
    public function userDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users')->with(['success' => 'User Deleted Successfully.']);
    }
    
    public function postSearch(Request $request)
    {
        if ($request->has('category')) {
            $category = $request->input('category');
            $posts = Post::whereHas('category', function ($query) use ($category) {
                $query->where('categoryname', 'like', '%' . $category . '%');
            })->with('category', 'user')->paginate(5);
        }
    
        return view('AdminFiles.posts', compact('posts'));
    
    }

    public function storeCategory(Request $request)
    {
        if($request->isMethod('post')){
            $category = new Category;
            $category->categoryname=$request->category_name;
            $category->save(); 
        };
        return redirect()->back()->with(['success' => 'Category Added Successfully']);
    }
}
