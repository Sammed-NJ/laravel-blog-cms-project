<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'posts' => Post::orderBy('created_at', 'desc')->get(),
    ]);
})->name('home');

Auth::routes();

Route::get('/post/{post}', [PostController::class, 'single_post'])->name('post');
// Route::get('/', [HomeController::class, 'index'])->name('home');


// Route::get('/logout', [LogoutController::class, 'logout'])->name('logoutAll');



// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // * View Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // * View Users Table
    Route::get('/users/view', [UserController::class, 'index'])->name('users.table');
    // * View Users Details
    Route::get('/user/{id}', [UserController::class, 'admin_user_setting'])->name('user');


    // * View Post Table
    Route::get('/posts/view', [PostController::class, 'index'])->name('posts.table');
    // * Create Post Form
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    // * Store Post data
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    // * Update Post data
    Route::get('/posts/{post}', [PostController::class, 'edit'])->name('post-edit');
    // Route::patch('/posts/{post}', [PostController::class, 'destroy'])->name('post-edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('post-update');
    // * Delete Post data
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post-delete');
});