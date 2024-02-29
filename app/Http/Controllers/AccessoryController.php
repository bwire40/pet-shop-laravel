<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\AccessoryCategory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $accessories = Accessory::orderBy('created_at', 'desc')->paginate(5);
        return view('accessories.index', compact('accessories'));
    }

    public function home()
    {
        $accessories = Accessory::orderBy('created_at', 'desc')->paginate(5);
        return view('accessories.home', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = AccessoryCategory::all();
        return view('accessories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $validated = $request->validate([
            "name" => "required|min:3",
            "category" => "required",
            "price" => "required",
            "description" => "required|min:5|max:1000",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:5128"
        ]);

        // image path
        $imagePath = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagePath);

        // accessory_category_id
        $accessory_category_id = AccessoryCategory::where("name", $validated["category"])->first()->id;

        // create pet data
        $request->user()->accessories()->create([
            "name" => $validated["name"],
            "category" => $validated["category"],
            "description" => $validated["description"],
            "price" => $validated['price'],
            "image" => $imagePath,
            "accessory_category_id" => $accessory_category_id,
        ]);


        return redirect()->route('accessories.create')->with('success', 'Accessory Added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        //
        return view('accessories.show', compact('accessory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessory $accessory)
    {
        //
        $categories = AccessoryCategory::all();
        return view('accessories.edit', compact('accessory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accessory $accessory)
    {
        //
        $validated = $request->validate([
            "name" => "required|min:3",
            "category" => "required",
            "price" => "required",
            "description" => "required|min:5|max:1000",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:5128"
        ]);

        // image path
        $imagePath = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagePath);

        // accessory_category_id
        $accessory_category_id = AccessoryCategory::where("name", $validated["category"])->first()->id;

        // create pet data
        $accessory->update([
            "name" => $validated["name"],
            "category" => $validated["category"],
            "description" => $validated["description"],
            "price" => $validated['price'],
            "image" => $imagePath,
            "accessory_category_id" => $accessory_category_id,
        ]);


        return redirect()->route('accessories.index')->with('success', 'Accessory Updated successfully!');
    }

    // add to cart
    public function addToCart($id)
    {
        // 
        $accessory = Accessory::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $accessory->name,
                "image" => $accessory->image,
                "price" => $accessory->price,
                "quantity" => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart Successfully!');
    }

    public function cart()
    {
        return view('cart.index');
    }


    // update cart
    public function update_cart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully Updated!');
        }
    }

    // remove from cart
    public function removeFromCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product successfully removed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessory $accessory)
    {
        //
        $accessory->delete();

        return redirect()->route('accessories.index')->with("success", "Accessory deleted Successfully!");
    }
}
