<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\Admin\DashboardController;





// * ROUTES FOR ALL

// * View All Post in front end (ONLY USER)
Route::get('/', function () {

    // $content = Post::get('tinyMSCcontent');
    // preg_match('/<img[^>]+>/i', $content, $image);
    // $content = str_replace($image, '', $content);

    // dd($image[0], $content);


    return view('home', [
        'posts' => Post::orderBy('created_at', 'desc')->get(),
    ]);
})->name('home');

Route::get('/post/{post}', [PostController::class, 'single_post'])->name('post');


Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');


// Route::get('/logout', [LogoutController::class, 'logout'])->name('logoutAll');



// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

// Route::prefix('admin')->middleware(['auth'])->group(function () {
// * View Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('roles', [RolesController::class, 'index'])->name('roles');
Route::get('permissions', [PermissionsController::class, 'index'])->name('permissions');

// * View Users Table
Route::get('/users/view', [UserController::class, 'index'])->name('users.table');
// * View Users Details
Route::get('/user/{id}', [UserController::class, 'admin_user_setting'])->name('user');

// * update profile
Route::put('user', [UserController::class, 'update'])->name('profile.update');



// * Delete User
// Route::delete('/user/{post}', [UserController::class, 'destroy'])->name('profile.delete');
// * Delete User
Route::delete('/user/{post}', [UserController::class, 'destroy'])->name('user.delete');

// * View Post Table
Route::get('posts', [PostController::class, 'index'])->name('posts.table');
// * Create Post Form
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// // * Store Post data
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::post('/upload', [PostController::class, 'tinymce']);
// // * Update Post data
Route::get('/posts/{post}', [PostController::class, 'edit'])->name('post.edit');
// // Route::patch('/posts/{post}', [PostController::class, 'destroy'])->name('post-edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('post.update');
// // * Delete Post data
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');
// });



// * Roles
Route::get('roles', [RolesController::class, 'index'])->name('roles');
Route::post('roles', [RolesController::class, 'store'])->name('roles.store');
Route::delete('/roles/{role}', [RolesController::class, 'destroy'])->name('role.delete');

// * Permissions
Route::get('permissions', [PermissionsController::class, 'index'])->name('permissions');
Route::post('permissions', [PermissionsController::class, 'store'])->name('permissions.store');
Route::delete('/permissions/{permission}', [PermissionsController::class, 'destroy'])->name('permissions.delete');




Route::group([
    'middleware' => 'auth',
], function () {
});