<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Like; // Replace with your model


class BlogController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Limiting to image files
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName); // Move the image to the 'uploads' folder in the public directory

            // Store the image path in the database
            $imagePath = 'uploads/' . $imageName;

            $post = new Post();
            $post->title = $validatedData['title'];
            $post->content = $validatedData['content'];
            $post->image = $imagePath; // Store the image path in the 'image' column
            $post->category_id = $validatedData['category_id'];
            $post->user_id = $validatedData['user_id'];
            $post->save();

            return redirect()->back()->with('success', 'Post created successfully');
        }
    }

    public function toggleLike($blogId)
    {
        $user = User::find(auth()->id());
        $blog = Post::find($blogId);

        if ($user && $blog) {
            if ($user->hasLiked($blog)) {
                $user->unlike($blog);
                return response()->json(['success' => true]);
            } else {
                $user->like($blog);
                return response()->json(['success' => true]);
            }
        }

        return response()->json(['success' => false]);
    }

    public function checkLikeStatus($blogId)
    {
        // Check if the blog post is liked by the user (pseudo-code)
        $liked = Like::where('user_id', auth()->id())
                     ->where('blog_id', $blogId)
                     ->exists();

        return response()->json(['liked' => $liked]);
    }
}
