<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owners;

class OwnerListController extends Controller
{
    public function displayOwner(Request $request)
    {
        $ownerId = $request->id;
        $owner = Owners::where('id', $ownerId)->first();
        return view('owner.index', compact('owner'));
    }

    public function update(Request $request)
    {
        $ownerId = $request->id;
        $owner = Owners::where('id', $ownerId)->first();
        $owner->first_name = $request->first_name;
        $owner->surname = $request->surname;
        $owner->email = $request->email;
        $owner->phone = $request->phone;
        $owner->address = $request->address;
        $owner->save();
        return redirect('homepage');
    }
}
