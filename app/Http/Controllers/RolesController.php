<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;

class RolesController extends Controller
{
    // * View of Roles
    public function index()
    {
        return view(
            'admin.rules.roles',
            ['roles' => Roles::all()]
        );
    }

    // * Create New Roles
    public function store(Request $request)
    {
        // dd($request->all());

        $roleField = $request->validate([
            'name' => ['required'],
            'description' => ['required']
        ]);
        // dd($roleField['name'], $roleField['description']);

        // dd(Roles::create($roleField));
        Roles::create($roleField);



        return back();
    }


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // * delete Role
    public function destroy(Roles $role)
    {

        $role->delete();

        return redirect('roles')->with('message', 'Role Deleted successfully!');
    }
}
