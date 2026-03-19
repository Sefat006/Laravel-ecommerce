<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function index()
    {
        $states = State::latest()->get();
        return view('admin.states.index', compact('states'));
    }



    // Create
    public function create()
    {
        $countries = Country::all();
        return view('admin.states.create', compact('countries'));
    }



    // Store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'shipping_charge' => 'required|numeric'
        ]);

        State::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'shipping_charge' => $request->shipping_charge
        ]);

        return redirect()->route('admin.states.index')
            ->with('success', 'State created successfully');
    }







    // Edit
    public function edit($id)
    {
        $state = State::findOrFail($id);
        $countries = Country::all();

        return view('admin.states.edit', compact('state', 'countries'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $state = State::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
            'shipping_charge' => 'required|numeric'
        ]);

        $state->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'shipping_charge' => $request->shipping_charge
        ]);

        return redirect()->route('admin.states.index')
            ->with('success', 'State updated successfully');
    }






    // Destroy
    public function destroy($id)
    {
        $state = State::findOrFail($id);

        $state->delete();

        return redirect()->route('admin.states.index')
            ->with('success', 'State deleted successfully');
    }
}
