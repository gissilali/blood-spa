<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile_complete = false;
        if (User::where('age', NULL) || User::where('weight', NULL) || User::where('blood_group_id', NULL)) {
            $profile_complete = false;          
        }
        else{
            $profile_complete = true;
        }
        return view('home', compact('profile_complete'));
    }
}
