<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\ViewController;
use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\UserControllers\UserViewController;
use App\Http\Controllers\UserControllers\UserAuthController;
use App\Http\Controllers\UserControllers\SettingsController;
use App\Http\Controllers\UserControllers\BlogController;
use App\Http\Controllers\UserControllers\OTPVerificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Hello, World!'; // Just a test message
});

//user routes
Route::controller(UserViewController::class)->group(function (){
    // Route::get('/', 'index');
    Route::get('user/login-form', 'loginForm');
    Route::get('user/signup-form', 'signupForm');
    Route::get('user/blogs', 'blogsPage');
    Route::get('user/about', 'aboutPage');
    Route::get('user/contact', 'contactPage');
    Route::get('user/addPost', 'addPostPage');
    Route::get('user/showblogs/{id}', 'showBlog');
    Route::get('profile-show/{id}', 'userProfile');
    Route::get('user/settings', 'settingsPage')->name('settings');
});
Route::post('register-user', [UserAuthController::class, 'register']);
Route::post('login', [UserAuthController::class, 'postLogin']);
Route::post('user-logout', [UserAuthController::class, 'logout']);
Route::get('otp/verify/{user}', [OTPVerificationController::class, 'show'])->name('otp.verify');
Route::post('otp-verify/{user}', [OTPVerificationController::class, 'verify']);
Route::get('/otp-resend/{user}', [OTPVerificationController::class, 'resendOtp'])->name('otp.resend');
Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update');
Route::post('/store-blog', [BlogController::class, 'store']);
Route::post('/like/{blog}', [BlogController::class, 'toggleLike'])->name('blog.toggleLike');
Route::get('/check-like-status/{blog}', [BlogController::class, 'checkLikeStatus'])->name('blog.checkLikeStatus');

















//admin routes
Route::get('/admin', [ViewController::class, 'index']);
Route::middleware(['admin.auth'])->controller(ViewController::class)->prefix('admin')->group(function (){
    Route::get('dashboard', 'dashboard');
    Route::get('posts', 'posts');
    Route::get('comments', 'comments');
    Route::get('users', 'users');
    Route::get('add-category', 'category');
    Route::get('/posts/{id}', 'show')->name('posts.show');
});
Route::post('/admin-login', [AuthController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin-logout', [AuthController::class, 'adminLogout']);
Route::get('/post-destroy/{id}', [AdminController::class, 'postDestroy'])->name('post.destroy');
Route::get('/comments-delete/{id}', [AdminController::class, 'commentsDelete'])->name('comments.delete');
Route::get('/user-delete/{id}', [AdminController::class, 'userDelete'])->name('user.delete');
Route::get('posts', [AdminController::class, 'postSearch'])->name('posts.search');
Route::post('categories-store', [AdminController::class, 'storeCategory'])->name('categories.store');