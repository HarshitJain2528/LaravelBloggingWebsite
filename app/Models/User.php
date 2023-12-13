<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'otp', 'otp_expires_at','profile_image','google_id'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'otp_expires_at' => 'datetime',
    ];

    public function likedBlogs()
    {
        return $this->belongsToMany(Post::class, 'blogs_likes', 'user_id', 'blog_id');
    }

    public function like(Post $post)
    {
        $this->likedBlogs()->attach($post);
    }

    public function unlike(Post $post)
    {
        $this->likedBlogs()->detach($post);
    }

    public function hasLiked(Post $post)
    {
        return $this->likedBlogs()->where('blog_id', $post->id)->exists();
    }
}
