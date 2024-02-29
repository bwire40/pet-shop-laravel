<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Pets;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function welcome()
    {
        $pets = Pets::orderBy('created_at', 'desc')->paginate(10);
        $accessories = Accessory::orderBy('created_at', 'desc')->paginate(10);
        return view('welcome', compact('pets', 'accessories'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact_us(Request $request)
    {

        $user = $request->user();
        return view('contact.contact', compact('user'));
    }
    public function accessories()
    {
        return view('accessories');
    }
    public function adopt_pet()
    {
        return view('pets.adopt-pet');
    }
}
