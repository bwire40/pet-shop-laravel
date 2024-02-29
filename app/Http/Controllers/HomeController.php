<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Pets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {

        // authoriazation

        // check if there is an auth id
        if (Auth::id()) {

            // using the auth instance get the user type of the authenticated user
            $userType = Auth()->user()->userType;

            if ($userType == 'user') {
                $pets = Pets::orderBy('created_at', 'desc')->paginate(10);
                $accessories = Accessory::orderBy('created_at', 'desc')->paginate(10);
                // check if the user type fetched is user then send to the relevant page
                return view('welcome', compact('pets', 'accessories'));
            } else if ($userType == 'admin') {

                $users = User::orderBy('created_at', 'desc')->paginate(10);
                return view('admin.index', compact('users'));
            } else {
                return view('welcome');
            }
        }

        // return view('welcoome');
    }
}
