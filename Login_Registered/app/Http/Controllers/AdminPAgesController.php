<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminPAgesController extends Controller
{
    //

public function viewUser(){
    $allUsers = User::all(); // Fetch all users

    return view('user', compact('allUsers')); // Pass to view
}


}
