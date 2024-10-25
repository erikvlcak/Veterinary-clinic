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

    public function editDogDetails(Request $request)
    {
        $dogId = $request->id;
        $details = Animals::with('photo')->where('id', $dogId)->first();
        return view('/animal.editAnimal', compact('details'));
    }

    public function editDogDetailsSave(Request $request)
    {
        $this->validate($request, [
            'new_name' => 'required|string',
            'new_breed' => 'required|string',
            'new_age' => 'required|integer|min:0',
            'new_weight' => 'required|integer|min:0',

        ], [
            'new_name.required' => 'Name field is empty.',
            'new_name.string' => 'Name field contains numbers.',
            'new_breed.required' => 'Breed field is empty.',
            'new_breed.string' => 'Breed field contains numbers.',
            'new_age.required' => 'Age field is empty.',
            'new_age.integer' => 'Age field contains letters.',
            'new_age.min' => 'Age is negative.',
            'new_weight.required' => 'Weight field is empty.',
            'new_weight.integer' => 'Weight field contains letters.',
            'new_weight.min' => 'Weight is negative.',
        ]);

        $newData = Animals::where('id', $request->id)->first();

        $newData->name = $request->new_name;
        $newData->breed = $request->new_breed;
        $newData->age = $request->new_age;
        $newData->weight = $request->new_weight;
        $newData->save();

        session()->flash('success_message', 'Information about your dog have been updated.');
        return redirect()->route('homepage');
    }
}
