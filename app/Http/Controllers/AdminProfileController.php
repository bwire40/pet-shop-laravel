<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $users = User::all();
        return view('admin.profile.index', [
            "user" => $request->user()
        ]);
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
    public function show(AdminProfile $adminProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminProfile $adminProfile)
    {
        //
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

        // // update user data
        // $user->update([
        //     "name" => $validated["name"],
        //     "email" => $validated["email"],
        //     "userType" => $validated["userType"],
        //     "age" => $validated["age"],
        //     "gender" => $validated["gender"],
        //     "image" => $imagePath,
        // ]);

        $request->user()->fill($validated);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->image = $imagePath;

        $request->user()->save();

        return redirect()->route('admin-profile.index')->with("success", "Successfully updated User!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //
        $user = $request->user();
        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $user->delete();
        return Redirect::to('/');
    }
}