<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;


class AnimalListController extends Controller
{
    public function showDogDetails(Request $request)
    {
        $dogId = $request->id;
        $details = Animals::with('photo')->where('id', $dogId)->first();


        return view('/animal.index', compact('details'));
    }
}
