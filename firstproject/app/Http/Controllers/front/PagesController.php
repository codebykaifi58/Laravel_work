<?php

namespace App\Http\Controllers\front;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
   
public function dash(){
    return view('admin.dash');
}
public function user(){
    $allUsers = User::all(); // Fetch all users

    return view('admin.user', compact('allUsers')); // Pass to view
}
public function setting(){
    return view('admin.setting');
}
public function reports(){
    return view('admin.reports');
}

    
}
