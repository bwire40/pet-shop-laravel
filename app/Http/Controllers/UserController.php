<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::where('userType', 'user')->paginate(5);
        return view('users.index', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $validated = $request->validate([
            "name" => "required|min:3",
            "email" => "required|email",
            "userType" => "required",
            "age" => "required",
            "gender" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:5128"


        ]);

        // image path
        $imagePath = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagePath);

        // update user data
        $user->update([
            "name" => $validated["name"],
            "email" => $validated["email"],
            "userType" => $validated["userType"],
            "age" => $validated["age"],
            "gender" => $validated["gender"],
            "image" => $imagePath,
        ]);

        return redirect()->route('users.index')->with("success", "Successfully updated User!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        //
        $User->delete();
        return redirect()->route('users.index')->with("success", "Successfully deleted user!");
    }
}