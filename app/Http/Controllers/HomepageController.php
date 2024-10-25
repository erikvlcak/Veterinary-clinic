<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\Owners;

class HomepageController extends Controller
{
    function create()
    {

        $results = Owners::with('animals')->limit(50)->get();
        return view('homepage', compact('results'));
    }
}
