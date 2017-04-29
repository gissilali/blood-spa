<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showEditProfileForm(){
    	$user = User::find(Auth::user()->id);

    	$user_name = $user->name;

    }
}
