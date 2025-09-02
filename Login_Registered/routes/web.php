<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/dash', [PagesController::class, 'dash'])->name('dash');
Route::get('/user', [PagesController::class, 'user'])->name('user');

//  for categories 
Route::get('/category', [PagesController::class, 'category'])->name('category');
Route::post('/addcategory', [PagesController::class, 'addcategory'])->name('addcategory');
// for products
Route::get('/addproduct', [PagesController::class, 'addproduct'])->name('addproduct');
Route::get('/allproduct', [PagesController::class, 'allproduct'])->name('allproduct');

Route::get('/setting', [PagesController::class, 'setting'])->name('setting');
Route::get('/reports', [PagesController::class, 'reports'])->name('reports');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
