<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;

class AnimalListController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->id;
        return view('animal.index', compact('animals'));
    }
}
