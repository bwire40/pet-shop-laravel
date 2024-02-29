<?php

namespace App\Http\Controllers;

use App\Models\Adorption;
use App\Models\Breed;
use App\Models\PetCategory;
use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Adorption $adorption)
    {
        //
        $pets = Pets::orderBy('created_at', 'desc')->paginate(5);

        return view('pets.index', compact("pets", "adorption"));
    }

    public function home(Pets $pets)
    {
        //
        $pets = Pets::all();
        return view('pets.adopt-pet', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $breeds = Breed::all();
        $categories = PetCategory::all();
        return view('pets.create', compact('breeds', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "name" => "required|min:3",
            "category" => "required",
            "breed" => "required",
            "description" => "required|min:5|max:1000",
            "age" => "required",
            "weight" => "required",
            "color" => "required|min:3",
            "adoption_status" => "required",
            "adorption_fee" => "required",
            "gender" => "required|min:3",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:5128"


        ]);

        // image path
        $imagePath = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagePath);
        // $request->image->storeAs('public/images', $imagePath);


        // pet_category_id

        $pet_category_id = PetCategory::where("name", $validated["category"])->first()->id;
        // breed_id
        $breed_id = Breed::where("name", $validated["breed"])->first()->id;


        // create pet data
        $request->user()->pets()->create([
            "name" => $validated["name"],
            "category" => $validated["category"],
            "breed" => $validated["breed"],
            "description" => $validated["description"],
            "age" => $validated["age"],
            "weight" => $validated["weight"],
            "color" => $validated["color"],
            "adoption_status" => $validated["adoption_status"],
            "adorption_fee" => $validated["adorption_fee"],
            "gender" => $validated["gender"],
            "image" => $imagePath,
            "pet_category_id" => $pet_category_id,
            "breed_id" => $breed_id
        ]);

        return redirect()->route('pets.create')->with("success", "Successfully added Pet!");
    }
    /**
     * Display the specified resource.
     */
    public function show(Pets $pet)
    {
        //
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pets $pet)
    {
        //
        $breeds = Breed::all();
        $categories = PetCategory::all();
        return view('pets.edit', compact('pet', 'breeds', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pets $pet)
    {
        //
        //
        $validated = $request->validate([
            "name" => "required|min:3",
            "category" => "required",
            "breed" => "required",
            "description" => "required|min:5|max:1000",
            "age" => "required",
            "weight" => "required",
            "color" => "required|min:3",
            "adoption_status" => "required",
            "adorption_fee" => "required",
            "gender" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:5128"


        ]);

        // image path
        $imagePath = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagePath);

        // pet_category_id

        $pet_category_id = PetCategory::where("name", $validated["category"])->first()->id;
        // breed_id
        $breed_id = Breed::where("name", $validated["breed"])->first()->id;


        $pet->update([
            "name" => $validated["name"],
            "category" => $validated["category"],
            "breed" => $validated["breed"],
            "description" => $validated["description"],
            "age" => $validated["age"],
            "weight" => $validated["weight"],
            "color" => $validated["color"],
            "adoption_status" => $validated["adoption_status"],
            "adorption_fee" => $validated["adorption_fee"],
            "gender" => $validated["gender"],
            "image" => $imagePath,
            "pet_category_id" => $pet_category_id,
            "breed_id" => $breed_id
        ]);


        return redirect()->route('pets.index')->with("success", "Successfully Updated Pet!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pets $pet)
    {
        //
        $pet->delete();
        return redirect()->route('pets.index')->with("success", "Successfully Deleted Pet!");
    }

    public function adorpt_form(Request $request, Pets $pet)
    {

        $user = $request->user();
        return view('adorption.adopt-pet-form', compact('pet', 'user'));
    }
}
