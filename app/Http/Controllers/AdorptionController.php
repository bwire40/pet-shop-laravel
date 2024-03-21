<?php

namespace App\Http\Controllers;

use App\Models\Adorption;
use App\Models\Pets;
use Illuminate\Http\Request;

class AdorptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //
        $adorptions = Adorption::orderBy('created_at', 'desc')->paginate(5);
        return view('adorption.index', compact('adorptions'));
    }

    public function adopt()
    {
        $adorptions = Adorption::where('adoption_status', 'Not adopted');
        $pets = Pets::all();
        return view('adorption.adopt-pet', compact('pets', 'adorptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            "username" => "required",
            "email" => "email|required",
            "address" => "required|min:3",
            "number" => "required|max:15",
            "petname" => "required",
            "adorption_fee" => "required",
            "category" => "required",
            "breed" => "required",
            "age" => "required",
            "color" => "required",
            "gender" => "required",
            "weight" => "required",
            "description" => "required",
            "experience" => "required",
            "pets" => "required",
            "vetenary" => "required",
            "house_type" => "required",
            "house_ownership" => "required",
            "house_agreement" => "required",
            "allergies" => "required",
            "training_type" => "required",
            "care" => "required",
            "followup" => "required",
            "terms" => "required",
        ]);

        $pets_id = Pets::where('name', [$validated["petname"]])->first()->id;
        $adorption_status = "pending";


        $request->user()->adorptions()->create([
            "username" => $validated["username"],
            "email" => $validated["email"],
            "address" => $validated["address"],
            "number" => $validated["number"],
            "petname" => $validated["petname"],
            "adorption_fee" => $validated["adorption_fee"],
            "category" => $validated["category"],
            "breed" => $validated["breed"],
            "age" => $validated["age"],
            "color" => $validated["color"],
            "gender" => $validated["gender"],
            "weight" => $validated["weight"],
            "description" => $validated["description"],
            "experience" => $validated["experience"],
            "pets" => $validated["pets"],
            "vetenary" => $validated["vetenary"],
            "house_type" => $validated["house_type"],
            "house_ownership" => $validated["house_ownership"],
            "house_agreement" => $validated["house_agreement"],
            "allergies" => $validated["allergies"],
            "training_type" => $validated["training_type"],
            "care" => $validated["care"],
            "followup" => $validated["followup"],
            "terms" => $validated["terms"],
            "pets_id" => $pets_id,
            "adorption_status" => $adorption_status
        ]);

        return redirect()->route('adopt')->with('success', 'Adorption form submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Adorption $adorption)
    {
        //
        dump($adorption);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adorption $adorption, Request $request, Pets $pet)
    {
        //

        return view('adorption.edit', compact('adorption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adorption $adorption)
    {
        $validated = $request->validate(["adorption_status" => "required|min:3"]);
        // $adorption_status = "approved";
        $adorption->update($validated);

        return redirect()->route('adorption.index')->with('success', 'Application status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adorption $adorption)
    {
        //
        $adorption->delete();

        return redirect()->route('adorption.index')->with('success', 'Deleted the adorption application Successfully!');
    }


    public function manage_adorptions(Request $request, Adorption $adorption)
    {

        $adorptions = Adorption::orderBy('created_at', 'desc')->paginate(5);
        return view('adorption.manage-adorptions', compact('adorptions'));
    }

    public function preview_adorption(Adorption $adorption, Request $request, Pets $pet)
    {
        //
        return view('invoices.customer_preview', compact('adorption'));
    }


    // print invoice
    public function print_invoice_html(Adorption $adorption, Request $request, Pets $pet)
    {
        //
        // $adorption = Adorption::orderBy('created_at', 'desc');
        $total = 0;
        $total = $adorption->adorption_fee + $total;
        $adorptions = Adorption::all();
        return view('invoices.order_invoice', compact('adorption', 'total', 'adorptions'));
    }
}
