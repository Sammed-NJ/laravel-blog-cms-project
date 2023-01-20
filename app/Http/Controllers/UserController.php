<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // * View Post Table in Admin
    public function index()
    {
        return view(
            'admin.users.users-table',
            ['users' => User::orderBy('created_at', 'desc')->get()]
        );
    }


    // Admin views user details
    public function admin_user_setting(User $id)
    {
        return view(
            'admin.users.user-details',
            ['user' => $id],
        );
    }
}