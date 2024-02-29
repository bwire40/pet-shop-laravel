<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\PetCategory;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('breeds.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $breeds = Breed::orderBy('created_at', 'desc')->paginate(10);
        $categories = PetCategory::all();
        return view('breeds.create', compact('breeds', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => "required|min:3",
            'category' => "required|min:3"
        ]);

        // category id
        $pet_category_id = PetCategory::where("name", $validated["category"])->first()->id;

        Breed::create([
            "name" => $validated["name"],
            "category" => $validated["category"],
            "pet_category_id" => $pet_category_id
        ]);

        return redirect()->route('breeds.create')->with('success', 'Breed Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Breed $breed)
    {
        //
        $categories = PetCategory::all();
        return view('breeds.edit', compact('breed', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Breed $breed)
    {

        //
        $validated = $request->validate([
            'name' => "required|min:3",
            'category' => "required|min:3"
        ]);

        // category id
        $pet_category_id = PetCategory::where("name", $validated["category"])->first()->id;

        $breed->update([
            "name" => $validated["name"],
            "category" => $validated["category"],
            "pet_category_id" => $pet_category_id
        ]);

        // redirect
        return redirect()->route('breeds.create')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        //delete breed
        $breed->delete();

        return redirect()->route('breeds.create')->with('success', 'Breed deleted Successfully!');
    }
}
