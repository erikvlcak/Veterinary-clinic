<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OwnerModel;

class OwnerListController extends Controller
{
    public function index()
    {
        $request = OwnerModel::all();
        return view('owner.index', compact('owners'));
    }
}
