<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function find($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    public function findAll()
    {
        $users = User::all();

        return response()->json($users);
    }
}
