<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GuestController extends Controller
{
    
    public function home() {

        $users = User::all();

        return view('pages.home', compact('users'));
    }
}
