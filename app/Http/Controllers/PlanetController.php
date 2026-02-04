<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planet = Planet::all();

        return view('planet.index', compact('planet'));
    }
}
