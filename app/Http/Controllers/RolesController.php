<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    // * View of Roles
    public function index()
    {
        return view('admin.rules.roles');
    }
}