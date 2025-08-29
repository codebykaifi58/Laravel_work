<?php

namespace App\Http\Controllers\front;

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
    return view('admin_app.user');
}
public function setting(){
    return view('admin_app.setting');
}
public function reports(){
    return view('admin_app.reports');
}
}
