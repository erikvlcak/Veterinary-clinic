<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalModel;

class AnimalListController extends Controller
{
    public function index()
    {
        $request = AnimalModel::all();
        return view('/animal.index', compact('animals'));
    }
}
