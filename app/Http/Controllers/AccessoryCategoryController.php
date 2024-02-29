<?php

namespace App\Http\Controllers;

use App\Models\AccessoryCategory;
use Illuminate\Http\Request;

class AccessoryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('accessory-categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = AccessoryCategory::orderBy('created_at', 'desc')->paginate(5);
        return view('accessory-categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $validated = $request->validate([
            "category" => "required|min:3|max:20"
        ]);

        $request->user()->accessory_categories()->create([
            "name" => $validated['category']
        ]);

        return redirect()->route('accessory-categories.create')->with('success', 'Category created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AccessoryCategory $accessoryCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccessoryCategory $accessory_category)
    {
        //
        return view('accessory-categories.edit', compact('accessory_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AccessoryCategory $accessory_category)
    {
        //
        //
        $validated = $request->validate([
            "name" => "required|min:3|max:20"
        ]);

        $accessory_category->update($validated);

        return redirect()->route('accessory-categories.create')->with('success', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccessoryCategory $accessory_category)
    {
        //
        $accessory_category->delete();
        return redirect()->route('accessory-categories.create')->with('success', 'Deleted Successfully!');
    }
}
