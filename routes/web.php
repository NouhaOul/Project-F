<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\UsersController;
use App\Models\Plat;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::delete('/redirects', [UsersController::class, 'destroy'])->name('profile.admin');
Route::get('/redirects',[HomeController::class,"index"])->name('admin');
Route::get('/redirects',[UsersController::class,"index"])->name('admin');
Route::get('/products',[PlatController::class,"index"])->name('products');
// Route::get('/products',[CategoryController::class,"index"])->name('products');
Route::get('/create', [PlatController::class, 'create'])->name('addPlat');
Route::get('/create', [CategoryController::class, 'index'])->name('addPlat');
Route::post('/products', [PlatController::class, 'store'])->name('products');
Route::delete('/products/{id}', [PlatController::class, 'destroy'])->name('products.destroy');

Route::get('/editPlat', [CategoryController::class, 'create'])->name('editPlat');

Route::get('/editPlat/{id}', [PlatController::class, 'edit'])->name('editPlat');
Route::put('/products/{id}', [PlatController::class, 'update'])->name('updatePlat');


Route::get('/addCat', [CategoryController::class, 'create'])->name('addCat');
Route::post('/storeCat', [CategoryController::class, 'store'])->name('storeCat');
Route::get('/products', [PlatController::class, 'index'])->name('products');
 


Route::get('/Cart',[PanierController::class,"index"])->name('Cart');

// Route::get('/redirects', [HomeController::class, 'index'])->name('admin');
// Route::get('/products', [PlatController::class, 'index'])->name('products');
// Route::get('/create', [PlatController::class, 'create'])->name('addPlat');
// Route::get('/create', [CategoryController::class, 'index'])->name('addPlat');

// Route::post('/products', [PlatController::class, 'store']);


// Route::get('/redirects', [HomeController::class, "index"])->name('admin');
// Route::get('/products', [PlatController::class, "index"])->name('products');
// Route::get('/create', [PlatController::class, 'create'])->name('addPlat');
// Route::post('/products', [PlatController::class, 'store'])->name('storePlat');

Route::get('/pdf',[UsersController::class, 'methode']);






