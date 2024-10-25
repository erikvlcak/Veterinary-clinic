<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owners;

class OwnerListController extends Controller
{
    public function index()
    {
        $request = Owners::all();
        return view('owner.index', compact('owners'));
    }
}
