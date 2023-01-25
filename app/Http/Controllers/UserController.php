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



    public function create(Request $request, User $user)
    {

        // dd($request->all());

        $profileInputs = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

        ]);



        if ($request->hasFile('avatar')) {
            $profileInputs['avatar'] = $request->avatar->store('avatars', 'public');
        }

        // $profileInputs['user_id'] = auth()->id();

        $user->update($profileInputs);

        return redirect('posts')->with('message', 'Post Updated Successfully!');
    }




    // * User Delete
    public function destroy($id)
    {

        $id = USer::find($id);

        $id->delete();

        return redirect('users/view')->with('message', 'User Deleted successfully!');
    }
}