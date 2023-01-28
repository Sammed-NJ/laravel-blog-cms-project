<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // * Updating Profile

    public function update(Request $request, User $user)
    {

        $profileInputs = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

        ]);



        if ($request->hasFile('avatar')) {
            $profileInputs['avatar'] = $request->avatar->store('avatars', 'public');
        }

        Auth::user()->update($profileInputs);

        return back()->with('message', 'Profile Updated Successfully!');
    }




    // * User Delete
    public function destroy($id)
    {

        $id = USer::find($id);

        $id->delete();

        return redirect('users/view')->with('message', 'User Deleted successfully!');
    }
}