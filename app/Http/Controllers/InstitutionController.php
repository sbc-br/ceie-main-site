<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Institution;

class InstitutionController extends Controller
{
    public function find($id)
    {
        $institution = Institution::find($id);

        return response()->json($institution);
    }

    public function findAll()
    {
        $institutions = Institution::all();

        return response()->json($institutions);
    }
}
