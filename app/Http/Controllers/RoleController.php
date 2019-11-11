<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
    public function find($id)
    {
        $role = Role::find($id);

        return response()->json($role);
    }

    public function findAll()
    {
        $roles = Role::all();

        return response()->json($roles);
    }
}
