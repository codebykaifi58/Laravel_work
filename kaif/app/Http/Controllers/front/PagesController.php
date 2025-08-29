<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

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
      public function service()
    {
        return view('service');
    }
      public function blog()
    {
        return view('blog');
    }
    // other methods...
}
