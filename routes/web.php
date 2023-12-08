<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\ViewController;
use App\Http\Controllers\AdminControllers\AuthController;
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

Route::get('/', [ViewController::class, 'index']);
Route::middleware(['admin.auth'])->controller(ViewController::class)->prefix('admin')->group(function (){
    Route::get('dashboard', 'dashboard');
    Route::get('posts', 'posts');
    Route::get('comments', 'comments');
    Route::get('users', 'users');
});
Route::post('/admin-login', [AuthController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin-logout', [AuthController::class, 'adminLogout']);
