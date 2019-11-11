<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Portal;

class PortalController extends Controller
{
    public function find($id)
    {
        $portal = Portal::find($id);

        return response()->json($portal);
    }

    public function findAll()
    {
        $portals = Portal::all();

        return response()->json($portals);
    }

    public function findByName($name)
    {
        $portals = Portal::findByNameIgnoreCase($name);

        return response()->json($portals);
    }
}
