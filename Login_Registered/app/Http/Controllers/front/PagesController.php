<?php

namespace App\Http\Controllers\front;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
public function home() {
    return view('apps_web.home');
}
public function about(){
    return view('apps_web.about');
}
public function shop(){
    return view('apps_web.shop');
}
public function contact(){
    return view('apps_web.contact');
}
public function dash(){
    return view('admin_app.dash');
}
public function user(){
    $allUsers = User::all(); // Fetch all users

    return view('admin_app.user', compact('allUsers')); // Pass to view
}
public function setting(){
    return view('admin_app.setting');
}
public function reports(){
    return view('admin_app.reports');
}
}
