<?php

namespace App\Http\Controllers\front;
use App\Models\User;
use App\Models\Category;
use App\Models\category2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


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
//practice category
public function category2(){
    $category2=category2::All();
    return view('admin_app.category2' , compact('category2'));
}
public function addcategory2(request $request){
    $request->validate([
        'category2Name' => 'required',
    ]);
    category2::Create([
        'name2' => $request->category2Name
    ]);
    return redirect()->back()->with('succes2',"Category2 Added Succesfuly");
}

public function category(){
$category=Category::ALL();
    return view('admin_app.category' , compact('category')); // Pass to view
}
public function addproduct(){
    $category=Category::ALL();
    $product=Product::All();
    return view('admin_app.addproduct', compact('category','product')); // Pass to view
}

public function addproductstore(request $request){
    $request->validate([
        'productName'=>'required',
        'productCategory'=>'required',
        'productName'=>'required',
        'productFreshness'=>'required',
        'productImage'=>'required',
        'productDescription'=>'required',
        'productPrice'=>'required',
    ]);

$imagepath=null;
if($request->hasfile('productImage')){
    $imagepath= $request->file('productImage')->store('products','public');
}

Product::create([
    'name'=>$request->productName,
    'category_id'=>$request->productCategory,
    'productFreshness'=>$request->productFreshness,
    'productImage'=>$imagepath,
    'productDescription'=>$request->productDescription,
    'productPrice'=>$request->productPrice,
]);
 return redirect()->back()->with('success', 'Product added successfully!');

}


public function allproduct(){
    return view('admin_app.allproduct'); // Pass to view
}
public function addcategory(Request $request ){
    // $allUsers = User::all(); // Fetch all users
 
     $request->validate([
            'categoryName' => 'required',
           
        ]);

        Category::Create([
            'name' => $request->categoryName
        ]);



    return redirect()->back()->with('success',"Category Added Successfuly"); // Pass to view

}


public function setting(){
    return view('admin_app.setting');
}
public function reports(){
    return view('admin_app.reports');
}
}
