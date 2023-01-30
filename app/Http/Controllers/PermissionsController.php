<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    // * View of Roles
    public function index()
    {
        return view(
            'admin.rules.permissions',
            ['permissions' => Permissions::all()]
        );
    }

    // * Create New Roles
    public function store(Request $request)
    {
        // dd($request->all());

        $roleField = $request->validate([
            'name' => ['required'],
        ]);
        Permissions::create($roleField);



        return back();
    }


    // * delete Role
    public function destroy(Permissions $permission)
    {

        // dd($permission);

        $permission->delete();

        return redirect('permissions')->with('message', 'Permissions Deleted successfully!');
    }
}