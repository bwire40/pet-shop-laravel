<?php

namespace App\Http\Controllers;

use App\Models\PetCategory;
use Illuminate\Http\Request;

class PetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pet-categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // search box
        // check if there is a search
        // chek serach value with our db
        $categories = PetCategory::all();

        if (request()->has('search')) {
            // check in db
            // do a like comparison
            $categories = $categories->where('name', 'like', '%' . request()->get('search', '') . '%');
        }
        //

        return view('pet-categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "name" => "required|min:3|max:20"
        ]);


        $request->user()->pet_categories()->create([
            "name" => $validated['name']
        ]);


        return redirect()->route('pet-categories.create')->with('success', 'Category created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PetCategory $pet_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PetCategory $pet_category)
    {
        //
        $categories = PetCategory::orderBy('created_at', 'desc')->paginate(5);
        return view('pet-categories.edit', compact('pet_category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PetCategory $pet_category)
    {
        //
        //
        $validated = $request->validate([
            "name" => "required|min:3|max:20"
        ]);

        $pet_category->update($validated);
        return redirect()->route('pet-categories.create')->with('success', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetCategory $pet_category)
    {
        //delete
        $pet_category->delete();
        return redirect()->route('pet-categories.create')->with('success', 'Category Deleted Successfully!');
    }
}
